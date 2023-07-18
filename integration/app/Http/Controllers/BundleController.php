<?php

namespace App\Http\Controllers;

use App\Models\BundleAdvantages;
use App\Models\BundleCategory;
use App\Models\Bundles;
use App\Models\Payments;
use App\Models\Subscription;
use App\Models\Users;
use Carbon\Carbon;
use DB;
use Exception;
use Http;
use Illuminate\Http\Request;
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
            'SELECT b.id, b.price, bc.name, b.duration, b.category FROM bundles b JOIN bundle_category bc on b.category = bc.id'
        );
        $avantages = BundleAdvantages::all();
        return view("admin.pages-bundles", ["bundlecat"=>$bc, "bundles"=>$bundles, "avt"=>$avantages]);
    }
    public function client()
    {
        $bc = BundleCategory::all();
        $bundles =DB::select(
            'SELECT b.id, b.price, bc.name, b.duration, b.category FROM bundles b JOIN bundle_category bc on b.category = bc.id'
        );
        $avantages = BundleAdvantages::all();
        return view("customer.bundle", ["bundlecat"=>$bc, "bundles"=>$bundles, "avt"=>$avantages]);
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
            $bundle = new BundleAdvantages;
            $bundle->name = $request->input('name') ;
            $bundle->bundle = $request->input('bundle') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de l'ajout " . $th->getMessage());
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
                    'redirect_url' => route('payment.callback', ["ref" => encrypt($usr->id)]),
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
                        'title' => 'Paiement de Commande',
                        'description' => 'Payment for Subscription' . $order->order_id,
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
            $transactionId = $request->input('transaction_id');

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
            DB::table('payments')->insert([
                'tx_ref' => $transaction->data->tx_ref,
                'amount' => $transaction->data->amount,
                'currency' => $transaction->data->currency,
                'status' => $transaction->data->status,
                'payment_type' => $transaction->data->payment_type,
                'flw_ref' => $transaction->data->flw_ref,
                'email' => $transaction->data->customer->email,
                'name' => $transaction->data->customer->name,
                'card_type' => $transaction->data->card->type,
                'customer_id' => $transaction->data->meta->consumer_mac,
                'phone_number' => $transaction->data->customer->phone_number
            ]);
            $id = decrypt($ref);
            $ore = Users::find($id);
            if ($ore === null) {
                throw new Exception("OOhhh zute une erreur!!. On a un petit souci ...", 1);
            }
            $sub = new Subscription();
            $tra = Payments::where("tx_ref",$transaction->data->tx_ref);	
            DB::table('Subscription')->insert([
                'bundle' => $transaction->data->meta->bundle,
                'amount' => $transaction->data->amount,
                'start_date' => Carbon::now()->toDateString(),
                'end_date' => Carbon::now()->addDays($transaction->data->meta->duration)->toDateString(),
                'user' => $transaction->data->meta->consumer_mac,
                'payment' => $tra->id
            ]);
            DB::commit();
            return redirect("/dashboard")->with('error', 'Votre Abonnement a été Payer');
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
