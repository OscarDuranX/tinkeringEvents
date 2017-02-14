<?php

namespace App\Listeners;

use App\Events\NewRegisterUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeEmailListener
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
     * @param  NewRegisterUser  $event
     * @return void
     */
    public function handle(NewRegisterUser $event)
    {
        //
    }
}
