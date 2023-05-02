<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|max:8',
            'address' => 'required',
            'opinion' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'お名前を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号入力してください',
            'postcode.max:8' => '7文字で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => '内容を入力してください'
        ];
    }
}
