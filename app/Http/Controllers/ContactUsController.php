<?php

namespace App\Http\Controllers;

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
            'message' => 'required'
        ]);

        contactUs::create($request->all());

        return back()->with('succes', 'Bedankt voor je bericht!');
    }

    
}