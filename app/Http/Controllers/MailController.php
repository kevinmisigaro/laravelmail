<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmed;

class MailController extends Controller
{
    public function sendMail(Request $request){
        Mail::to($request->email)->send(new RegistrationConfirmed());

        return response()->json('Email sent', 200);
    }
}
