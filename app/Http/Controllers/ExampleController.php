<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // public function Hello()
    // {
    //     return view('api.Hello'); // Ensure this view file exists
    // }

    public function Login()
    {
        return view('Login');
    }
}
