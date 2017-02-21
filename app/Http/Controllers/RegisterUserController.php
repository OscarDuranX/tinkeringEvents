<?php

namespace App\Http\Controllers;

use App\Events\NewRegisterUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Log;

class RegisterUserController extends Controller
{
    public function registerUser()
    {
        $user = new \App\User();

        $user->name ="Oscar";
        $user->email ="Oscar@duran.com";

        Log::info("Before Event");

        event(new Registered($user));

        Log::info("After Event");

        dump("Done!");

    }
}
