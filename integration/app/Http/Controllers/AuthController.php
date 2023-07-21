<?php

namespace App\Http\Controllers;

use App\Models\Pubs;
use DB;
use Carbon\Carbon;
use App\Models\Users;
use Exception;
use Mail;
use Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class AuthController extends Controller
{
    //
    public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('/')->with('error', "Successfully logged out.");
    }
/**
 * Reserved for 
 * social media auth functionalities
 * not implemented yes. In stand by ...
 */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        // Do something with the user's information
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Getting the user's information
            $user = Socialite::driver('google')->user();
            $existingUser = Users::where('email', $user->getEmail())->first();
            if ($existingUser) {
                auth()->login($existingUser, true);
            } else {
                $newUser = new Users();
                $newUser->firstname = $user->getName();
                $newUser->email = $user->getEmail();
                // we set email_verified_at because the user's email is already veridied by social login portal
                $newUser->email_verified_at = now();
                ;
                $newUser->save();
                auth()->login($newUser, true);
            }
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', "Nous ne parvenons pas á vous connecter avec google.");
            ;
        }
    }

}