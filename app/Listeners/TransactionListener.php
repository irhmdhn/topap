<?php

namespace App\Listeners;

use App\Events\TransactionEvent;
use App\Models\Transaction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class TransactionListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\TransactionEvent  $event
     * @return void
     */
    public function handle($event)
    {
        // dd($event);
        // Fetch the countdown model
        Transaction::where('ts_code', $event)->update([
            'ts_status' => 'Failed',
        ]);

        // Check if the transaction status is still pending
    }
}
