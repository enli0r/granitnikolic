<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(){
        $data = request()->validate([
            'ime' => 'required',
            'email' => 'required|email',
            'description' => 'required'
        ]);

        //Sending mail
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect()->back();
    }
}
