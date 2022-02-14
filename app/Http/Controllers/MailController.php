<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmed;

class MailController extends Controller
{
    public function sendMail(){
        Mail::to('kevinmisigaro1@gmail.com')->send(new RegistrationConfirmed());

        return response()->json('Email sent', 200);
    }
}
