<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeachersMessagesController extends Controller
{
    public function index(){
        return view('admin.teachers_messages');
    }
}
