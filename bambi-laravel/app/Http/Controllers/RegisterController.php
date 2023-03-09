<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\Register;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        //validate user information
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed',

        ]);

        //store user
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));
        //Set user id in session
        session(['id' => auth()->user()->id]);

        try {
            Mail::to($request->email)->queue(new Register($request->first_name, $request->last_name));
        } catch (Exception $exception) {
            error_log("Couldn't send register email");
        }
        
        
        return redirect()->route('welcome');
    }
}
