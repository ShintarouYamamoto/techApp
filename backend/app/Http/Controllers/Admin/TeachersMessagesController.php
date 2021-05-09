<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TeacherMessage;
use Illuminate\Http\Request;

class TeachersMessagesController extends Controller
{
    public function index(){

        $teacher_messages = TeacherMessage::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.teachers_messages',['teacher_messages' => $teacher_messages]);
    }

    public function create(){

        return view('admin.teachers_messages_create');
    }
}
