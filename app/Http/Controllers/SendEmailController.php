<?php

namespace App\Http\Controllers;

use App\Mail\UserEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index() {
        Mail::to('example@gmail.com')->send(new UserEmail());
        
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        }else {
            return response()->success('Great! Successfully send in your email');
        }
    }
}
