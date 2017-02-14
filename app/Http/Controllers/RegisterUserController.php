<?php

namespace App\Http\Controllers;

use App\Events\NewRegisterUser;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function registerUser()
    {
        event(new NewRegisterUser);
    }
}
