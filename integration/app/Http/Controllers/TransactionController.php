<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

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
    private function getTransactiontatus($transactionReference)
    {
        // Call the Flutterwave API or mobile money provider's API to get the transaction status
        // Return the status obtained from the API response
    }
}
