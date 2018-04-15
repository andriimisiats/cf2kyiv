<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MainController extends Controller
{
    public function index()
    {
    	return view('layout');
    }

    public function sendEmail(Request $request)
    {
        if ($request->ajax())
        {
        	Mail::send(
                'emails.mail', 
                [
                    'email'         => $request->email,
                    'phone'         => $request->phone,
                    'ajax_message'  => $request->ajax_message
                ], 
                function($message)
        	    {
            		$message->to('andrii.misiats@gmail.com', 'Andrii Misiats')->subject('Landing page: нове повідомлення');
            		$message->from('noreply@cf2kyiv.com.ua', 'Промислові шланги');
        	    }
            );
        }
    }
}
