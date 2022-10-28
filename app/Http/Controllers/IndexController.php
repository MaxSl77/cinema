<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
}
