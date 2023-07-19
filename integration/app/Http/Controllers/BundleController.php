<?php

namespace App\Http\Controllers;

use App\Models\BundleAdvantages;
use App\Models\BundleCategory;
use App\Models\Bundles;
use App\Models\Payments;
use App\Models\Subscription;
use App\Models\Users;
use Auth;
use Carbon\Carbon;
use DB;
use Exception;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

class BundleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bc = BundleCategory::all();
        $bundles =DB::select(
            'SELECT b.id, b.price, bc.name, b.duration, b.category, e.masquer, count(distinct s.id) "subs", MAX(end_date) "highest_date"
            FROM bundles b 
            JOIN bundle_category bc 
            ON b.category = bc.id
            JOIN etat e
            ON b.etat = e.id
            LEFT JOIN subscription s
            ON s.bundle = b.id
            GROUP BY b.id, b.price, bc.name, b.duration, b.category, e.masquer'

        );
        $avantages = BundleAdvantages::all();
        return view("admin.pages-bundles", ["bundlecat"=>$bc, "bundles"=>$bundles, "avt"=>$avantages]);
    }
    public function client()
    {
        if(Auth::check()){
        $bc = BundleCategory::all();
        $currentDate = date('Y-m-d');
        $bundles =DB::select(
            'SELECT b.id, b.price, bc.name, b.etat, b.duration, b.category FROM bundles b JOIN bundle_category bc on b.category = bc.id'
        ); 
        $results = DB::table('subscription')
                ->where('user', Auth::user()->id)
                ->whereDate('end_date', '>=', $currentDate)
                ->get()->first();
        $avantages = BundleAdvantages::all();
    }else
    {
        redirect("/login")->with('error', "Connectez-vous pour consulter et souscrire á une offre.");;
    }
        return view("customer.bundle", ["bundlecat"=>$bc, "bundles"=>$bundles, "avt"=>$avantages, "subscription"=>$results]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $bundle = new Bundles();
            $bundle->price = $request->input('price') ;
            $bundle->category = $request->input('category') ;
            $bundle->duration = $request->input('duration') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Bundle successfully added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de l'ajout " . $th->getMessage());
        }
    }
    public function avtstore(Request $request)
    {
        try {
            DB::beginTransaction();
            $bundle = new BundleAdvantages();
            $bundle->name = $request->input('name') ;
            $bundle->bundle = $request->input('bundle') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de l'ajout " . $th->getMessage());
        }
    }
    public function adddays(Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $request->input('add') ;
            $sub = Subscription::find($request->input('sub'));
            $carbonDate = Carbon::parse($sub->end_date);
            $sub->end_date = $carbonDate->addDays($add);
            $sub->save();
            DB::commit();
            return redirect()->back()->with('error', $add." Jours ajoutées avec succes.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de l'ajout " . $th->getMessage());
        }
    }

    public function deldays(Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $request->input('add') ;
            $sub = Subscription::find($request->input('sub'));
            $carbonDate = Carbon::parse($sub->end_date);
            $sub->end_date = $carbonDate->subDays($add);
            $sub->save();
            DB::commit();
            return redirect()->back()->with('error', $add." Jours supprimer avec succes.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la suppression " . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(bundles $bundles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bundles $bundles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $bundle = Bundles::find($id);
            $bundle->price = $request->input('price') ;
            $bundle->category = $request->input('category') ;
            $bundle->duration = $request->input('duration') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully Updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la mise a jour " . $th->getMessage());
        }
    }

    public function avtupdate(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $bundle = BundleAdvantages::find($id);
            $bundle->name = $request->input('name') ;
            $bundle->bundle = $request->input('bundle') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Bundle successfully Updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la mise a jour " . $th->getMessage());
        }
    }

    public function state($id)
    {
        try {
            DB::beginTransaction();
            $bundle = Bundles::find($id);
            $bundle->etat = $bundle->etat == 1 ? 2 : 1 ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully Updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la mise a jour " . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $bundle = Bundles::find($id);
            $bundle->delete();
            DB::commit();
            return redirect()->back()->with('error', "Bundle successfully deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la suppression " . $th->getMessage());
        }
    }
    public function avtdestroy(Request $request)
    {
        try {
            DB::beginTransaction();
            $bundle = BundleAdvantages::find($request->input("id"));
            $bundle->delete();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la suppression " . $th->getMessage());
        }
    }
    /**
     * Flutter pay payment functions.
     */
    public function flutterpay(Request $request)
    {
        try {
            // Get the form data
            
            $country = "CM";
            $bundle = Bundles::find($request->input('bundle'));
            $usr = Users::find($request->input('user'));
            if ($bundle == null) {
                throw new Exception("Ce tarif n'existe plus. Choisissez en un autre");
            }
            if ($usr == null) {
                throw new Exception("Une erreur interne est survenue. Utilisateur inexistant.");
            }
            if ($country != "Master Card" || $country != "Visa Card") {
                $phoneNumber = "";
                $amount = $request->input('amount');

                // Set up the payment payload
                $payload = [
                    'tx_ref' => 'mobile_money_' . time(),
                    'amount' => $amount,
                    'currency' => 'XAF',
                    'redirect_url' => route('bundlepay.callback', ["ref" => encrypt($usr->id)]),
                    'payment_options' => 'mobilemoney_'. $country,
                    'meta' => [
                        'consumer_mac' => $usr->id,
                        'bundle' => $bundle->id,
                        'duration' => $bundle->duration
                    ],
                    'customer' => [
                        'email' => $usr->email,
                        'phone_number' => $phoneNumber,
                        'name' => $usr->firstname . " " . $usr->lastname,
                    ],
                    'customizations' => [
                        'title' => "Frais d'abonnements sur Elwin",
                        'description' => 'Abonnement pour ' .$usr->email,
                        'logo' => url('img/favicon.png'),
                    ],
                ];

                // Set the SSL certificate path
                $certPath = 'C:\wamp64\bin\php\php8.1.0\cacert-2023-05-30.pem';

                // Set the cURL options
                $curlOptions = [
                    'verify' => false,
                ];

                // Call the Flutterwave API to initiate the payment
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . env('FLUTTERWAVE_SECRET_KEY'),
                    'Content-Type' => 'application/json',
                ])->withOptions($curlOptions)
                    ->post('https://api.flutterwave.com/v3/payments', $payload);

                // Check if the API call was successful
                if ($response->ok()) {
                    $paymentData = $response->json();

                    // Redirect the user to the payment page
                    return redirect($paymentData['data']['link']);
                } else {
                    // Handle the error
                    $error = $response->json();
                    return back()->with('error', $error['message']);
                }
            } 
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function handlePaymentCallback(Request $request, $ref)
    {
        try {
            DB::beginTransaction();
            $transactionReference = $request->input('tx_ref');
            $transactionId =$request->input('transaction_id'); //4470159;

            // Use the Flutterwave PHP library to retrieve the transaction details
            $curlOptions = [
                'verify' => false,
            ];
            // Use the VerifyTransaction trait to retrieve the transaction details
            $transaction = $this->verifyTransaction($transactionId);

            //return response()->json(['message' => $transaction]);
            if($transaction->data->status != "successful")
            {
                throw new Exception("Le paiement ne s'est pas dérouler comme prévue", 1);
            }
            $tra = new Payments();
            $tra->tx_ref = $transaction->data->tx_ref;
            $tra->amount = $transaction->data->amount;
            $tra->currency = $transaction->data->currency;
            $tra->status = $transaction->data->status;
            $tra->payment_type = $transaction->data->payment_type;
            $tra->flw_ref = $transaction->data->flw_ref;
            $tra->email = $transaction->data->customer->email;
            $tra->name = $transaction->data->customer->name;
            $tra->card_type = isset($transaction->data->card) == true ? $transaction->data->card->type : $transaction->data->payment_type;
            $tra->customer_id = $transaction->data->meta->consumer_mac;
            $tra->phone_number = $transaction->data->customer->phone_number;
            $tra->save();
            /*$tra = DB::table('payments')->insert([
                'tx_ref' => $transaction->data->tx_ref,
                'amount' => $transaction->data->amount,
                'currency' => $transaction->data->currency,
                'status' => $transaction->data->status,
                'payment_type' => $transaction->data->payment_type,
                'flw_ref' => $transaction->data->flw_ref,
                'email' => $transaction->data->customer->email,
                'name' => $transaction->data->customer->name,
                'card_type' => isset($transaction->data->card) == true ? $transaction->data->card->type : $transaction->data->payment_type,
                'customer_id' => $transaction->data->meta->consumer_mac,
                'phone_number' => $transaction->data->customer->phone_number
            ]);*/
            $id = decrypt($ref);
            $ore = Users::find($id);
            if ($ore === null) {
                throw new Exception("OOhhh zute une erreur!!. On a un petit souci ...", 1);
            }
            DB::table('Subscription')->insert([
                'bundle' => $transaction->data->meta->bundle,
                'amount' => $transaction->data->amount,
                'start_date' => Carbon::now()->toDateString(),
                'end_date' => Carbon::now()->addDays($transaction->data->meta->duration)->toDateString(),
                'user' => $transaction->data->meta->consumer_mac,
                'payment' => $tra->id
            ]);
            DB::commit();
            Session::put('start_date', Carbon::now()->toDateString());
            Session::put('end_date', Carbon::now()->addDays($transaction->data->meta->duration)->toDateString());
            Session::put('bundle', $transaction->data->meta->bundle);
            return redirect("/dashboard")->with('error', 'Votre Abonnement a été Payer');
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    private function verifyTransaction($transactionReference)
    {
        $url = "https://api.flutterwave.com/v3/transactions/$transactionReference/verify";
        $headers = [
            'Authorization' => 'Bearer ' . env('FLUTTERWAVE_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ];
        $options = [
            'verify' => false,
        ];

        $response = Http::withHeaders($headers)->withOptions($options)->get($url);

        return json_decode($response->body());
    }
}
