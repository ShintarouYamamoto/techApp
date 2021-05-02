<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\UserCourse;
use Auth;

class ClassController extends Controller
{
    public function index()
    {
        return view('Member.class');
    }
}
