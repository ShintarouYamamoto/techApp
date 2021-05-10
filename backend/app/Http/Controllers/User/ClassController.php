<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\UsersCourse;
use App\Course;
use App\TeachersMessage;
use Auth;

class ClassController extends Controller
{
    public function index()
    {
        try{
            $user_course = UsersCourse::where('user_id', Auth::id())->firstOrFail();

            $user_class = Course::where('course',1)//TODO:コースが増えた時には受け取った値を入れる
                ->where('id', $user_course->course_id)
                ->firstOrFail();

        } catch (\Exception $e) {
            $message = 'クラスが存在していません。お問い合わせ下さい。';
            return view('Member.exception', ['message' => $message]);
        }

        $class_messages = TeachersMessage::where('class_to', $user_class->class)->orderBy('created_at', 'desc')->paginate(2);

        return view('Member.class', ['class_messages' => $class_messages], ['user_class' => $user_class]);
    }
}
