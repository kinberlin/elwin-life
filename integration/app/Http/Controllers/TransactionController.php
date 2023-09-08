<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Payments;
use App\Models\Transaction;
use Carbon\Carbon;
use DB;
use Exception;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class TransactionController extends Controller
{
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $Transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $Transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $Transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $Transaction)
    {
        //
    }


    public function checkStatus(Request $request)
    {
        try {
            $transactionReference = $request->input('transaction_reference');

            // Check the transaction status using Flutterwave API or mobile money provider's API
            // Update the transaction status in the database

            // Example code:
            $transaction = Transaction::where('transaction_reference', $transactionReference)->first();

            if ($transaction == null) {
                throw new Exception("Error Checking Transaction Satus for tx_ref : " . $transactionReference);
            }
            if ($transaction != null) {
                // Get transaction status using API and update the record in the database
                // Example code:
                $transacts = $this->getTransactiontatus($transactionReference); // Implement your API call to get the status

                if ($transacts->data->status === 'successful') {
                    // Transaction is successful
                    
                    if ($transaction->bundle != null) {
                        DB::beginTransaction();
                        $pay = new Payments();
                        $pay->tx_ref = $transacts->data->tx_ref;
                        $pay->amount = $transacts->data->amount;
                        $pay->currency = $transacts->data->currency;
                        $pay->status = $transacts->data->status;
                        $pay->payment_type = $transacts->data->payment_type;
                        $pay->flw_ref = $transacts->data->flw_ref;
                        $pay->email = $transacts->data->customer->email;
                        $pay->name = $transacts->data->customer->name;
                        $pay->card_type = isset($transacts->data->card) == true ? $transacts->data->card->type : $transacts->data->payment_type;
                        $pay->customer_id = $transacts->data->meta->consumer_mac;
                        $pay->phone_number = $transacts->data->customer->phone_number;
                        $pay->save();

                        DB::table('Subscription')->insert([
                            'bundle' => $transaction->data->meta->bundle,
                            'amount' => $transaction->data->amount,
                            'start_date' => Carbon::now()->toDateString(),
                            'end_date' => Carbon::now()->addDays($transaction->data->meta->duration)->toDateString(),
                            'user' => $transaction->data->meta->consumer_mac,
                            'payment' => $pay->id
                        ]);
                        DB::commit();
                    } else {
                        DB::beginTransaction();
                        DB::table('payments')->insert([
                            'tx_ref' => $transacts->data->tx_ref,
                            'amount' => $transacts->data->amount,
                            'currency' => $transacts->data->currency,
                            'status' => $transacts->data->status,
                            'payment_type' => $transacts->data->payment_type,
                            'flw_ref' => $transacts->data->flw_ref,
                            'email' => $transacts->data->customer->email,
                            'name' => $transacts->data->customer->name,
                            'card_type' => $transacts->data->card->type,
                            'customer_id' => $transacts->data->meta->consumer_mac,
                            'order_id' => $transacts->data->meta->order_id,
                            'phone_number' => $transacts->data->customer->phone_number
                        ]);
                        $ore = Orders::find($transacts->data->meta->order_id);
                        if ($ore === null) {
                            throw new Exception("Nous n'avons pas trouvé cette commande", 1);
                        }
                        $ore->status = 'Payer';
                        $ore->save();
                        DB::commit();
                    }
                }
            }
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        // Return a response as needed
    }

    //API call to get the Flutterwave transaction object
    public function getTransactionStatus($transactionReference)
    {
        // Making a request to the Flutterwave API to get the transaction status
        $url = "https://api.flutterwave.com/v3/transactions/verify_by_reference";
        $headers = [
            'Authorization' => 'Bearer ' . env('FLUTTERWAVE_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ];
        $options = [
            'verify' => false,
        ];

        $response = Http::withHeaders($headers)->withOptions($options)->get($url, [
            'tx_ref' => $transactionReference,
        ]);
        // Check if the API request was successful
        if ($response->successful()) {
            $responseData = json_decode($response->body());
            return $responseData;
            //$transacts = Transaction::where('transaction_reference',$transactionReference )->get()->first();
        }
        else{
            if($response->body() != null){
                dd($response->body() . 'For Transaction : '.$transactionReference);
                $responseData = json_decode($response->body());
                return $responseData;
            }
        }

        // If the API request failed, you can handle the error accordingly
        // For example, you can log the error, return a default status, or throw an exception
        //Log::error('Failed to retrieve transaction status from Flutterwave API');
        //dd('Failed to retrieve transaction status from Flutterwave API');
        return null;
    }
}