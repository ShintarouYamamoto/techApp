<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Course;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){

        $classes = Course::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.class',['classes' => $classes]);

    }
}
