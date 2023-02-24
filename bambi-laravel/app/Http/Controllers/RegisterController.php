<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        //validate user information
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',

        ]);

        //store user
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_email' => $request->email,
            'user_password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('user_email', 'user_password'));


        return redirect()->route('welcome');
    }
}
