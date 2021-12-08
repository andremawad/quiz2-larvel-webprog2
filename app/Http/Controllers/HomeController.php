<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function create(Request $request)
    {
        $user = User::find(auth()->id());
        $image = $request->image;
        $IMGname = $user->name . 'IMG.' . $image->extension();
        $image->move(public_path('storage/images'), $IMGname);
        Address::Create([
            'address' => $request->address,
            'description' => $request->description,
            'type' => $request->type,
            'price' => $request->price,
            'number_beds' => $request->number_beds,
            'image' => $IMGname,
        ]);
    }
    
}
