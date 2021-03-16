<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getsession(Request $request)
    {

        if($request->session()->has('name'))
        {
         echo $request->session()->get('name');
        }
        else
        {
     echo "no data";
        }
    }

    public function setsession(Request $request)
    {
        $request->session()->put('name','Karthiga');
        echo "Data has been added";
    }

    public function deletesession(Request $request)
    {
        $request->session()->forget('name');
        echo "Data has been deleted";
    }
}
