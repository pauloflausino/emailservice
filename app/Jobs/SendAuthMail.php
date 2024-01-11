<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;


class SendAuthMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $registerEmail = new RegisterEmail();
      

        //return $registerEmail;
        $to = "teste@teste.com";

        Mail::to($to)
        ->cc('email@gmail.com')
        ->bcc('email2@gmail.com')
        ->send($registerEmail);

    }
}
