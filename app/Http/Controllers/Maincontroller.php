<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index($name=null)
    {
    return 'Hi from Main controller Name:'.$name;
}
}