<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Http\Requests\UserUpdateRequest;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('Member.user', ['user' => $user]);
    }
    public function edit()
    {
        $user = Auth::user();
        $message = "";

        return view('Member.edit', ['message' => $message], ['user' => $user]);
    }
    public function update(UserUpdateRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = Auth::user();
            $user->student_name = $request->input('student_surname');
            $user->student_name = $request->input('student_name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->tel_no = $request->input('tel_no');
            $user->parent_name = $request->input('parent_surname');
            $user->parent_name = $request->input('parent_name');
            $user->save();
            DB::commit();
            $message = '更新完了';
        } catch (\Exception $e) {
            $message = '更新に失敗しました';
            DB::rollback();
        }

        return view('Member.edit', ['message' => $message], ['user' => $user]);
    }
}
