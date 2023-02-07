<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getUser()
    {
        return view('register');
    }
    public function registerUser(Request $req)
    {
        $req->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'confirm_password'=>'required|same:password',
            ]
            );
        echo"<pre>";
        print_r($req->all());
    }
}
