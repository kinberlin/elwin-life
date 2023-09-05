<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Transaction;
use App\Http\Controllers\TransactionController;

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
        $transaction_controller = new TransactionController();
        $transactions = Transaction::where('status', 'pending')->get();

        foreach ($transactions as $transaction) {
            // Check the transaction status using Flutterwave API or mobile money provider's API
            // Update the transaction status in the database

            // Example code:
            $newStatus = $transaction_controller->getTransactionStatus($transaction->transaction_reference); // Implement your API call to get the status

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

}
