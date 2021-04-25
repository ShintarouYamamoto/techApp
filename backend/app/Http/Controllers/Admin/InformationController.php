<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){

        $information = Information::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.information', ['information' => $information]);
    }

    public function create(){

        return view('admin.information_create');
    }

    public function store(Request $request){

        $information = new Information;

        $information->subject = $request->input('subject');
        $information->content = $request->input('content');
        $information->info_to = $request->input('info_to');
        $information->save();

        return redirect(route('admin.information.create'));
    }

    public function edit($info_id){
        $information = Information::where('id', $info_id)
            ->firstOrFail();

        return view('admin.information_edit',['information' => $information]);
    }

    public function update(Request $request){

        $information = Information::find($request->id);

        $information->subject = $request->input('subject');
        $information->content = $request->input('content');
        $information->info_to = $request->input('info_to');
        $information->save();

        return redirect(route('admin.information.edit',$request->id));
    }

}
