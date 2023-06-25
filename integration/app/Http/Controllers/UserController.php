<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use App\Models\Users;
use App\Models\Pubs;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class UserController extends Controller
{
    public function login()
    {
        $pubs = Pubs::where('etat', 1)->get();
        return view('customer.login', ["pubs" => $pubs]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $ref = $request->input('ref');
        $pubs = Pubs::where('etat', 1)->get();
        if (!$ref) {
            return view('customer.register', ['ref' => '1', "pubs" => $pubs]);
        } else {
            return view('customer.register', ['ref' => $ref, "pubs" => $pubs]);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                'name' => 'required'
            ]);
            $u1 = Users::where('email', $request->input('email'))->get()->first();
            if ($u1 !== null) {
                throw new Exception('This User mail address is already taken');
            }
            DB::beginTransaction();
            $user = new Users();
            $referralCode = $request->input('ref');
            if ($referralCode) {
                $referrer = Referral::where('code', $referralCode)->first();
                if ($referrer) {
                    $referrer->increment('successful_referrals');
                    $user->referrer = $referrer->user;
                    //$user->save();
                }
                /*else
                {
                    throw new Exception("Error Processing Referral code", 1);         
                }*/
            }
            $user->email = $request->input('email');
            $user->firstname = $request->input('name');
            $user->phone = $request->input('phone');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            DB::commit();

            // Generate referral code for the new user
            $referralCode = $this->generateReferralCode($user->id);
            $referral = new Referral();
            $referral->user = $user->id;
            $referral->code = $referralCode;
            $referral->save();
            auth()->login($user);
            Session::put('referral', $referralCode);
            return redirect('/dashboard')->with('error', "Registered Succesfully");
        } catch (Throwable $th) {
            return redirect('/register')->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', 'Nous vous avons envoyé un mail de récupération de mot de passe!')
            : back()->withErrors(['email' => trans($response)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, Users $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forgotpassword()
    {
        $pubs = Pubs::where('etat', 1)->get();
        return view('customer.forgot-password', ["pubs" => $pubs]);
    }
    /**
     * Generate a unique referral code for a user.
     *
     * @param int $userId The ID of the user.
     * @return string The unique referral code.
     */
    function generateReferralCode($userId)
    {
        $hash = Hash::make($userId);
        $code = substr($hash, 0, 8); // Use the first 8 characters of the hash as the referral code
        return $code;
    }
    public function submitForgetPasswordForm(Request $request)
    {
        try {
            /*$request->validate([
                'email' => 'required|email|exists:users',
            ]);*/
            $user = Users::where('email', $request->input('email'))->get()->first();
            if($user === null)
            {
                throw new Exception("Cette utilisateur n'existe pas");
            }
            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->input('email'),
                'token' => $token,
                'createdat' => Carbon::now()
            ]);

            Mail::send('customer.forgetPassword', ['token' => $token], function ($message) use ($request) {
                $message->to("support@elwin.com");
                $message->subject('Reset Password');
            });

            return redirect()->back()->with('error', "We have e-mailed your password reset link!");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage() . ' ');
        }
    }
    public function showForgetPasswordForm()
    {
        $pubs = Pubs::where('etat', 1)->get();
        return view('customer.forgot-password', ["pubs" => $pubs]);
    }
    public function showResetPasswordForm($token)
    {
        $pubs = Pubs::where('etat', 1)->get();
        $pass = 
        return view('customer.reset-password', ["pubs" => $pubs, "token" => $token]);
    }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required'
        ]);
        if($request->input("password") !== $request->input("password_confirmation"))
        {
            throw new Exception("Les mots de passes ne correspondent pas", 1);
        }


        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = Users::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('error', 'Your password has been changed!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->status == 1) {
                if (Auth::user()->role == 2) {
                    $code = Referral::where('user', Auth::user()->id)->first();
                    if (!$code) {
                        $user = Auth::user();
                        $referralCode = $this->generateReferralCode($user->id);
                        $referral = new Referral();
                        $referral->user = $user->id;
                        $referral->code = $referralCode;
                        $referral->save();
                        $code = $referralCode;
                    }
                    Session::put('referral', $code->code);
                    Session::put('user_id', Auth::user()->id);
                    Session::put('firstname', Auth::user()->firstname);
                    Session::put('role', Auth::user()->role);
                    Session::put('image', Auth::user()->image);
                    return redirect()->route('client.dashboard');
                } elseif (Auth::user()->role == 1) {
                    Session::put('user_id', Auth::user()->id);
                    Session::put('firstname', Auth::user()->firstname);
                    Session::put('role', Auth::user()->role);
                    Session::put('image', Auth::user()->image);
                    return redirect()->route('admin.dashboard');
                }
            } else {
                Session::flush();
                Auth::logout();
                return redirect()->back()->with('error', 'This account has been suspended');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }
    public function status($id)
    {
        try {
            DB::beginTransaction();
            $us = Users::find($id);
            $us->status = $us->status == 1 ? 2 : 1;
            $us->update();
            DB::commit();
            return redirect('/admin/users')->with('error', "User status updated");
        } catch (Throwable $th) {
            return back()->withErrors($th->getMessage() . ' error code number : ' . $th->getCode() . ' on line : ' . $th->getLine());
        }
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/')->with('error', "Successfully logged out.");
    }
}