<?php

namespace App\Http\Controllers;

use App\Mail\TestSendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    //
    function index(){
        // Penerima Email
        Mail::to('test@gmail.com')->send(new TestSendEmail());
    }
}
