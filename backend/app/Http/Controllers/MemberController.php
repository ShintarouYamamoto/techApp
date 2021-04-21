<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;

class MemberController extends Controller
{
    public function index()
    {
        $informations = Information::limit(12)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Member.top', ['informations' => $informations]);
    }
}
