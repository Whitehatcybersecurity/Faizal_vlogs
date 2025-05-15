<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHomePage(){

        return view('back_end.admin_panel');
    }


}
