<?php
// app/Http/Controllers/EmailController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $to = $request->input('to');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Envie o e-mail
        Mail::to($to)->send(new \App\Mail\CustomEmail($subject, $message));

        return response()->json(['message' => 'E-mail enviado com sucesso']);
    }
}
