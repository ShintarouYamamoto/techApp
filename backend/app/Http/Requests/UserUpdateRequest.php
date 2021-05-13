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
            'student_lastname' => ['string', 'max:255'],
            'student_lastname_kana' => ['string', 'max:255', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'student_firstname' => ['string', 'max:255'],
            'student_firstname_kana' => ['string', 'max:255', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'email' => ['string', 'email', 'max:255'],
            'address' => ['string', 'max:255'],
            'tel_no' => ['string', 'max:255'],
            'parent_lastname' => ['string', 'max:255'],
            'parent_lastname_kana' => ['string', 'max:255', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'parent_firstname' => ['string', 'max:255'],
            'parent_firstname_kana' => ['string', 'max:255', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
        ];
    }
    public function attributes()
    {
        return [
            'student_lastname' => '生徒姓',
            'student_lastname_kana' => '生徒姓フリガナ',
            'student_firstname' => '生徒名',
            'student_firstname_kana' => '生徒名フリガナ',
            'email' => 'メールアドレス',
            'address' => '住所',
            'tel_no' => '電話番号',
            'parent_lastname' => '保護者姓',
            'parent_lastname_kana' => '保護者姓フリガナ',
            'parent_firstname' => '保護者名',
            'parent_firstname_kana' => '保護者名フリガナ',
        ];
    }
}
