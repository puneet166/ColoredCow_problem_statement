<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;
use Auth;

class EmailController extends Controller
{
    function index()
    {
        if($user = Auth::user())
        {
        return view('emailsend');
        }
        else
        {
            return view('auth/login');
        }
    }

    function send(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|string',
        'message' => 'required',
        'subject' =>'required',
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message,
            'subject' => $request->subject

        );
        $emailss = explode(' ', $request->email);
        
        foreach ($emailss as $recipient) {
            Mail::to($recipient)->send(new sendingEmail($data));
        }
       
        return back()->with('success', 'Email has been sent');
    }

}