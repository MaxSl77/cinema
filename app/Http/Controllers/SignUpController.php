<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function signUp(Request $request) {
        $data = $request->validate([
            'email' => 'email:rfc,dns',
            'name' => 'required|min:1',
            'password' => 'required|confirmed',
            'checkbox' => 'required',
        ]);

        $user = User::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            event(new Registered($user));

            auth('web')->login($user);

            return redirect()->route('verification.notice');
        }
        return redirect(route('home'));
    }
}
