<?php

namespace GDU\Http\Controllers;

use Illuminate\Http\Request;
use GDU\Mail\ContactForm;
use Mail;

class MailController extends Controller
{
    //
    public function sendMail(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            //'g-recaptcha-response' => 'required|captcha'
        ]);

    	$content = [
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'message' => $request->message
    	];

    	$receiverAddress = 'enzogeron@gmail.com';
    	Mail::to($receiverAddress)->send(new ContactForm($content));

        session()->flash('notification', 'Gracias! Nos comunicaremos contigo pronto.');

    	return redirect('/#CONTACT');
    }
}
