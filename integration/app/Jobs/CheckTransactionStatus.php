<?php

namespace App\Jobs;

use App\Models\Orders;
use App\Models\Payments;
use DB;
use Exception;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Transaction;
use App\Http\Controllers\TransactionController;
use Throwable;

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
        try {
            // Retrieve all pending transactions from the database
            $transaction_controller = new TransactionController();
            $transactions = Transaction::where('status', 'pending')->get();

            foreach ($transactions as $transaction) {
                $transactionReference = $transaction->transaction_reference;
                // Check the transaction status using Flutterwave API or mobile money provider's API
                // Delete the transaction from database if succesfull 
                // Example code:
                if ($transaction == null) {
                    throw new Exception("Error Checking Transaction Satus for tx_ref : " . $transactionReference);
                }
                if ($transaction != null) {
                    // Get transaction status using API and update the record in the database
                    // Example code:
                    $transacts = $transaction_controller->getTransactionstatus($transactionReference);
                    if ($transacts == null) {
                        $transaction->delete();
                    } else {
                        if ($transacts->data->status === 'successful') {
                            // Transaction is successful
                            $exist = Payments::where('tx_ref', $transaction->transaction_reference)->get()->first();
                            if ($transaction->bundle != null) {
                                if ($exist == null) {
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
                                }

                            } else {
                                if ($exist == null) {
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
                                }
                            }
                            $transaction->delete();

                        }
                    }
                }
                // Return a response as needed
            }
        } catch (Throwable $th) {
            return dd($th->getMessage());
        }
    }

}