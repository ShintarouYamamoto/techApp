<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;

class InformationController extends Controller
{

    public function index($info_id)
    {
        $information = Information::where('id', $info_id)->firstOrFail();

        return view('Member.information', ['information' => $information]);
    }
}
