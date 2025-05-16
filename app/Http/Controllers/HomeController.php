<?php

namespace App\Http\Controllers;

use App\Models\Mainposter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function homePage()
    {
        $mainposters = Mainposter::first();
        return view('front_end.home', compact('mainposters'));

    }
}
