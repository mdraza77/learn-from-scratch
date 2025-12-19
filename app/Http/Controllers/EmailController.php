<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $to = "mdraza7477@gmail.com";
        $msg = "Hello";
        $subject = "Learn From Scratch";
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
    }
}
