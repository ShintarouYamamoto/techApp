<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_surname' => ['string', 'max:255'],
            'student_name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'address' => ['string', 'max:255'],
            'tel_no' => ['string', 'max:255'],
            'parent_surname' => ['string', 'max:255'],
            'parent_name' => ['string', 'max:255'],
        ];
    }
    public function attributes()
    {
        return [
            'student_surname' => '生徒姓',
            'student_name' => '生徒名',
            'email' => 'メールアドレス',
            'address' => '住所',
            'tel_no' => '電話番号',
            'parent_surname' => '保護者姓',
            'parent_name' => '保護者名',
        ];
    }
}
