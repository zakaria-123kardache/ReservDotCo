<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    //

    public function welcome()
    {
        return view('welcome');
    }
}
