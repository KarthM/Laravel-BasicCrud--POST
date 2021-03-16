<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index()
    {
        return view('layouts/login');
    }


    public function loginsubmit(Request $request)
    {
        $validatedata=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:12'
        ]);
      $email=$request->input('email');
      $password=$request->input('password');
      return "email".$email ."<br>"."password". $password ;
    }
}
