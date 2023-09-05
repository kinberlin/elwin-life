<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CheckTransactionStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Retrieve all pending transactions from the database
        $transactions = Transaction::where('status', 'pending')->get();

        foreach ($transactions as $transaction) {
            // Check the transaction status using Flutterwave API or mobile money provider's API
            // Update the transaction status in the database

            // Example code:
            $newStatus = $this->getTransactionStatus($transaction->transaction_reference); // Implement your API call to get the status

            $transaction->status = $newStatus;
            $transaction->save();

            if ($newStatus === 'successful') {
                // Transaction is successful
                // Perform any necessary actions or notifications
            } elseif ($newStatus=== 'failed') {
                // Transaction has failed
                // Perform any necessary actions or notifications
            } else {
                // Transaction is still pending or unknown status
                // Perform any necessary actions or notifications
            }
        }
    }

    // Implement your API call to get the transaction status
    private function getTransactionStatus($transactionReference)
    {
        // Call the Flutterwave API or mobile money provider's API to get the transaction status
        // Return the status obtained from the API response
    }
}
