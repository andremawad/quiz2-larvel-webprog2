<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    
    public function index()
    {
        return view('auth.SignIn');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            //return back to the last page , with will flash a message to the session
            return back()->with('status', 'Invalid login details');
        }
        return redirect()->route('home');
    }
}
