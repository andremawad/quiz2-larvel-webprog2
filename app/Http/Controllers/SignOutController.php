<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function store()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
