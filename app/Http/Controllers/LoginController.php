<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function __construct()
    {

    }


    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }


    public function Login()
    {
        return view('Admin.Login');
    }

    public function LoginUser(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "validate" => true,
                "message" => $validator->errors()->first()
            ]);
        }



        $Login = DB::table('users')
            ->where('email', $req->input('email'))
            ->first();

        if (!$Login) {
            return response()->json([
                "success" => false,
                "message" => "Invalid Credentials"
            ]);
        }


        session_start();
        if (Hash::check($req->input('password'), $Login->password)) {

            $_SESSION["id"] = $Login->id;
            $_SESSION["name"] = $Login->name;
            return response()->json([
                "success" => true,
                "message" => "Welcome"
            ]);

        }
         else {
            return response()->json([
                "success" => false,
                "message" => "Wrong User"
            ]);
        }

    }

}
