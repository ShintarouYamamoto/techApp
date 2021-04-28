<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();

        return view('Member.user', ['user' => $user]);
    }
    public function edit()
    {
        $user = Auth::user();

        return view('Member.edit', ['user' => $user]);
    }
}
