<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Course;
use App\Http\Requests\ClassRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    public function index(){

        $classes = Course::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.class',['classes' => $classes]);

    }

    public function create(){

        return view('admin.class_create');
    }

    public function store(ClassRequest $request){

        DB::beginTransaction();
        try {
            $class = new Course;

            $class->course = $request->input('course');
            $class->class_id = $request->input('class_id');
            $class->class_name = $request->input('class_name');
            $class->save();
            DB::commit();
            $message = '新規クラスを作成しました。';
        } catch (\Exception $e) {
            $message = '新規クラスの作成に失敗しました。';
            DB::rollback();
        }

        return redirect(route('admin.class.create'))->with('message',$message);
    }

    public function edit($info_id){
        $class = Course::where('id', $info_id)
            ->firstOrFail();

        return view('admin.class_edit',['class' => $class]);
    }

    public function update(ClassRequest $request){

        DB::beginTransaction();
        try {
            $class = Course::find($request->id);

            $class->course = $request->input('course');
            $class->class_id = $request->input('class_id');
            $class->class_name = $request->input('class_name');
            $class->save();
            DB::commit();
            $message = 'クラスを編集しました。';
        } catch (\Exception $e) {
            $message = 'クラスの編集に失敗しました。';
            DB::rollback();
        }

        return redirect(route('admin.class.edit',$request->id))->with('message',$message);
    }

    public function destroy(Request $request){

        DB::beginTransaction();
        try {
            Course::destroy($request->id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect(route('admin.class.top'));

    }
}
