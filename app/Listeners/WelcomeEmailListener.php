<?php

namespace App\Listeners;

use App\Events\NewRegisterUser;
use App\Mail\WelcomeEmail;
use App\Mail\WelcomeEmailMarkdown;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class WelcomeEmailListener implements ShouldQueue
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
    public function handle(Registered $event)
    {
        Mail::to($event->user->email)->send(
            new WelcomeEmailMarkdown($event->user));
    }
}
