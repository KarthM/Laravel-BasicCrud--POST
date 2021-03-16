<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index(){
        $fruits=array('apple','orange','pear');
        return view('welcome',compact('fruits'));
    }
}
