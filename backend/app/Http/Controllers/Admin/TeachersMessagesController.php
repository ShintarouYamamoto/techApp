<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeachersMessageRequest;
use App\TeachersMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class TeachersMessagesController extends Controller
{
    public function index(){

        $teachers_messages = TeachersMessage::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.teachers_messages',['teachers_messages' => $teachers_messages]);
    }

    public function create(){

        return view('admin.teachers_messages_create');
    }

    public function store(TeachersMessageRequest $request){

        DB::beginTransaction();
        try {
            $information = new TeachersMessage;

            $information->subject = $request->input('subject');
            $information->content = $request->input('content');
            $information->class_to = $request->input('class_to');
            $information->save();
            DB::commit();
            $message = '講師メッセージを投稿しました。';
        } catch (\Exception $e) {
            $message = '講師メッセージの投稿に失敗しました。';
            DB::rollback();
        }

        return redirect(route('admin.teachers_messages.create'))->with('message',$message);
    }
}
