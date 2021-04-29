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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'address' => ['string', 'max:255'],
            'tel_no' => ['string', 'max:255'],
            'parent_name' => ['string', 'max:255'],
        ];
    }
    public function attributes()
    {
        return [
            'student_name' => '生徒氏名',
            'email' => 'メールアドレス',
            'address' => '住所',
            'tel_no' => '電話番号',
            'parent_name' => '保護者氏名',
        ];
    }
}
