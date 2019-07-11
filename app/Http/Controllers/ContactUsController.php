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
            'subject' => 'required|min:3',
            'message' => 'min:10'

        ]);
        
        Mail::send('emails.contact', [
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->message
        ], function ($mail) use($request) 
        {$mail->from($request->email, $request->name);
        
        $mail->to('selamat.jalan237@gmail.com')->subject('Contactformulier');
        });
        
        contactUs::create($request->all());

        return back()->with('succes', 'Bedankt voor je bericht!');
    }

    
}