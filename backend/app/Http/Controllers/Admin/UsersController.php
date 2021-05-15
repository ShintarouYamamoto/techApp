<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        $users = User::sortable()
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.users',['users' => $users]);

    }

    public function detail($user_id){
        $user = User::where('id',$user_id)
            ->firstOrFail();

        return view('admin.user_detail',['user' => $user]);
    }
}
