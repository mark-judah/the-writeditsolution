<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MessageController extends Controller
{
    public function send_email(Request $request){

        $details=[
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message'),
        ];
        Mail::to('admin@lydiangetich.co.ke')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent succesfully!');
        
}
}
