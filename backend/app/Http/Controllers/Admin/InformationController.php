<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){

        $information = Information::orderBy('created_at', 'desc')
            ->paginate(10);

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

}
