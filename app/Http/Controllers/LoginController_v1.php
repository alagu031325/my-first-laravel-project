<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        //diedump of data from request object
        //dd($request->all());

        // to validate using multiple rules we can use '|'(required|alpha) or '[]' notation
        // to include custom validation text we use the second parameter and specify the field name and rule to which we need to override the laravel default validation text
        $request->validate([
            'name' => ['required','alpha','min:6','max:12'], //min 6 char long and max 12 char
            'email' => ['required','email'],
            'password' => 'required'
        ],[
            'name.required' => 'The user name field is required',
            'name.min' => 'The user name should atleast be 6 characters long',
            'name.alpha' => 'User name should only contain letters',
            'email.email' => 'Kindly type a valid email ID'
        ]);

        //if validation fails return will not be executed - user will be redirectly to the same page with errors 

        return $request;
    }
}
