<?php

namespace App\Listeners;

use App\Events\ProvaListener;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProvaListener
{
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
     * @param  ProvaListener  $event
     * @return void
     */
    public function handle(ProvaListener $event)
    {
        //
    }
}
