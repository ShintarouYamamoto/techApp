<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\UserCourse;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usercourses=UserCourse::where('user_id', Auth::id())->get();

        return view('Member.course', ['usercourses' => $usercourses]);
    }
    public function class()
    {
        return view('Member.class');
    }
}
