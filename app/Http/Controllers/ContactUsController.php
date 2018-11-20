<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUs;


class ContactUsController extends Controller
{
    
    public function contactUs() 
    {
        return view('pages.blog.contact');
    }

    public function contactUsPost(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'min:10'

        ]);
        
        Mail::send('emails.contact', [
            'msg' => $request->message
        ], function ($mail) use($request) 
        {$mail->from($request->email, $request->name);
        
        $mail->to('rensvandenbrink@gmail.com')->subject('Contactformulier');
        });
        
        contactUs::create($request->all());

        return back()->with('succes', 'Bedankt voor je bericht!');
    }

    
}