<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendMails()
    {
        $details = [
            'title' => 'This is a Mail from me to myself',
            'body' => 'This is for testing how mail works in laravel'
        ];

        Mail::to('ezechelanre@gmail.com')->send(new testMail($details));
        return "Email sent";
    }

    // public function sendMails()
    // {
    //     //$to_name = "Lanre";
    //     $to_email = "ezechilanre@gmail.com";
    //     $data = [
    //         'name'=>'Lanre',
    //         'body' => 'A test email'
    //     ];
    //     Mail::send('emails.mail', $data, function($message) use ($to_email) {

    //         $message->to($to_email)->subject("Laravel Test Mail");
    //         $message->from("ezechelanre@gmail.com");

    //     });
    // }

}
