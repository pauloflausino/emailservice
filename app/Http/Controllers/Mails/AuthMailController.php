<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class AuthMailController extends Controller
{
    public function sendRegisterMail(){

        $user = new User();
        $user->name = "Paulo Henrique";

        $to = 'teste@mail.com';
        
        $registerEmail = new RegisterEmail($user);
      

        //return $registerEmail;

        Mail::to($to)
        ->send($registerEmail);



    }
}
