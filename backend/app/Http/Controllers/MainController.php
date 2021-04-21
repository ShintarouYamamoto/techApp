<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('Main.top');
    }

    public function buy()
    {
        return view('Main.buy');
    }

}
