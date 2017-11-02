<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\SendWelcomeMail;

class MailController extends Controller
{
    public function sendWelcome(Request $request)
    {
    	$email_to = $request->email_to;
    	Mail::send(new SendWelcomeMail($email_to));
    	return back();
    }
}
