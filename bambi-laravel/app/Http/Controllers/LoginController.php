<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid Login Details');
        }
        //Set user id in session
        session(['id' => auth()->user()->id]);
        session(['firstName' => auth()->user()->first_name]);

        return redirect()->route('welcome');
    }
}
