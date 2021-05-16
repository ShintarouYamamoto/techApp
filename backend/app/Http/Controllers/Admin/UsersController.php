<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\User;
use App\UsersCourse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        $users = User::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.users',['users' => $users]);

    }

    public function detail($user_id){
        $user = User::where('id',$user_id)
            ->firstOrFail();

        $user_courses = UsersCourse::where('user_id',$user_id)
            ->with('course')
            ->get();

        return view('admin.user_detail',[
            'user' => $user,
            'user_courses' => $user_courses,
        ]);
    }

    public function add_class($user_id){

        $classes = Course::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.add_class',[
            'classes' => $classes,
            'user_id' => $user_id,
        ]);
    }
}
