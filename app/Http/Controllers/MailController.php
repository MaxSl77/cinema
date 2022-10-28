<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function contactForm(FormContactRequest $request) {
        Mail::to("mslabko77@gmail.com")->send(new ContactFormMail($request->validated()));

        return redirect(route('contact'));
    }
}
