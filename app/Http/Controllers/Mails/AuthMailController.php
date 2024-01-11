<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Jobs\SendAuthMail;

class AuthMailController extends Controller
{
    public function sendRegisterMail(){


        SendAuthMail::dispatch();

       


    }
}
