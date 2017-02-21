<?php

namespace App\Http\Controllers;

use App\Events\NewRegisterUser;
use Illuminate\Http\Request;
use Log;

class RegisterUserController extends Controller
{
    public function registerUser()
    {
        $user = new \App\User();

        $user->name ="Oscar";
        $user->email ="Oscar@duran.com";

        Log::info("prova");

        event(new NewRegisterUser);
    }
}
