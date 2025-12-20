<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    public function sendEmailForm()
    {
        return view('send-email');
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $to = $request->to;
        $msg = $request->message;
        $subject = $request->subject;
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));

        return back()->with('success', 'Email sent successfully');
    }
}
