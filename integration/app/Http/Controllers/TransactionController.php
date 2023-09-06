<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $transactionReference = $request->input('transaction_reference');

        // Check the transaction status using Flutterwave API or mobile money provider's API
        // Update the transaction status in the database

        // Example code:
        $transaction = Transaction::where('transaction_reference', $transactionReference)->first();

        if ($transaction) {
            // Get transaction status using API and update the record in the database

            // Example code:
            $newStatus = $this->getTransactiontatus($transactionReference); // Implement your API call to get the status

            $transaction->status = $newStatus;
            $transaction->save();

            if ($newStatus === 'successful') {
                // Transaction is successful
                // Perform any necessary actions or notifications
            } elseif ($newStatus === 'failed') {
                // Transaction has failed
                // Perform any necessary actions or notifications
            } else {
                // Transaction is still pending or unknown status
                // Perform any necessary actions or notifications
            }
        }

        // Return a response as needed
    }

    // Implement your API call to get the transaction status
    public function getTransactionStatus($transactionReference)
    {
        // Make a request to the Flutterwave API to get the transaction status
        $url = "https://api.flutterwave.com/v3/transactions/verify_by_reference" ;
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
            $responseData = $response->json();
            return response()->json([
                'message' => 'Une erreur s\'est produite lors du chargement de cette page',
                'responnse' =>  $response->json()
            ]);
            
            // Extract the relevant information from the API response
            /*$status = $responseData['data']['status']; // Assuming the status field is named 'status'
    
            // Return the transaction status
            return $status;*/
        }
    
        // If the API request failed, you can handle the error accordingly
        // For example, you can log the error, return a default status, or throw an exception
        /*Log::error('Failed to retrieve transaction status from Flutterwave API');
        return 'unknown';*/
    }
}
