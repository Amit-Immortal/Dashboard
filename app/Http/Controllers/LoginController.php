<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function login_user(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::SELECT("SELECT * FROM `users` WHERE `password` = '$password' AND `email` = '$email';");

        if(!empty($user))         
        {
            $user = $user[0];

            $request->session()->put('id', $user->id);
            $request->session()->put('password', $user->password);
            $request->session()->put('email', $user->email);
            

            return redirect('dashboard');
        }
        else{
            return response()->json([

                'message' => "email/password is incorrect",
                "code"=> 0,

            ]);
        }
    }

   // logout function
   public function logout()
   {
       session()->flush();

       return redirect('/');
    }
}
