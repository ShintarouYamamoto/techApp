<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Course;
use App\UsersCourse;
use App\Http\Requests\UserUpdateRequest;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        try {
            $user_course = UsersCourse::where('user_id', Auth::id())->firstOrFail();

            $user_class = Course::where('course', 1)->where('id', $user_course->course_id)->firstOrFail();

            $user_class = $user_class->class;
        } catch (\Exception $e) {
            $user_class = "未配属";
        }

        return view('Member.user', ['user' => $user, 'user_class' => $user_class]);
    }
    public function edit()
    {
        $user = Auth::user();

        return view('Member.edit', ['user' => $user]);
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

        return redirect(route('member.edit', ['user' => $user]))->with('message', $message);
    }
}
