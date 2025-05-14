<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function homePage()
    {
        return view('front_end.home');

    }
}
