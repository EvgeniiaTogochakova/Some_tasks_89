<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userform');
    }

    public function store(Request $request)
    {
        $userData =
            [
                'User name' => $request->username,
                'Last name' => $request->lastname,
                'Email' => $request->email,
            ];
        // return response()->json($userData);
        return view('hello', ['user' => $userData]);
    }
}
