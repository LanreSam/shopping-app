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

        Mail::to('ezechelanre@gmail.com')->send(new TestMail($details));
        return "Email sent";
    }
}
