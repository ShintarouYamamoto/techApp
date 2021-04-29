<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests\UserUpdateRequest;


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
    public function update(UserUpdateRequest $request)
    {
        $user = Auth::user();
        $user->student_name = $request->input('student_name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->tel_no = $request->input('tel_no');
        $user->parent_name = $request->input('parent_name');
        $user->save();

        return redirect(route('member.user'));
    }
}
