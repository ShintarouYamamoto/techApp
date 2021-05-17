<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRegisterRequest;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/member';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('member.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'student_lastname' => $data['student_lastname'],
            'student_lastname_kana' => $data['student_lastname_kana'],
            'student_firstname' => $data['student_firstname'],
            'student_firstname_kana' => $data['student_firstname_kana'],
            'email' => $data['email'],
            'address' => $data['address'],
            'tel_no' => $data['tel_no'],
            'parent_lastname' => $data['parent_lastname'],
            'parent_lastname_kana' => $data['parent_lastname_kana'],
            'parent_firstname' => $data['parent_firstname'],
            'parent_firstname_kana' => $data['parent_firstname_kana'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
