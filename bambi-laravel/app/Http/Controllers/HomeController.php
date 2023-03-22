<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Product;

//have to import this to call any product database query
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class HomeController extends Controller
{
    public function index () {
        //gets a list of all products from the products table and stores them in $products
        //limits number of products fetched to 12 for carousel
        $products = Product::skip(0)->take(12)->get();


        //returns the page to navigate to
        return view('welcome', [
            //passing $products into the welcome page as a products variable
            'products' => $products,
        ]);
    }

    public function contactUs(Request $request) {
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email|string',
            'message' => 'required|string',
        ], [
            'firstName.required' => 'Provide a first name',
            'lastName.required' => 'Provide a last name',
            'email.required' => 'Provide a valid email',
            'message.required' => 'Provide an message',
        ]);

        try {
            Mail::to('bambicustomerservice@gmail.com')->queue(new ContactUs(
                $request->firstName, $request->lastName, $request->email, $request->message));
        } catch (Exception $exception) {
            error_log("Couldn't send register email");
        }

        return redirect()->back()->with('sent', 'Contact Message Success');
    }
}
