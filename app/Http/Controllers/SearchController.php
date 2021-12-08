<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function index()
    {
        return view('search');
    }
    public function search(Request $request)
    {
        if (!empty($request)) {
            $address = $request->address;
            $description = $request->description;
            $type = $request->type;
            $results = Address::Where('address', 'LIKE', '%' . $address . '%')
                ->orWhere('description', 'LIKE', '%' . $description . '%')
                ->orWhere('type', $type)
                ->get();
            return view('search', [
                'results' => $results
            ]);
        } else {
            $results = Address::all();
            return view('search', [
                'results' => $results
            ]);
        }
    }
}
