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
            'first-name' => ['required', 'string'],
            'family-name' => ['required', 'string'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email'],
            'post' => ['required', 'string', 'regex:/^[0-9-]+$/' ,'max:8'],
            'address' => ['required', 'string'],
            'type' => ['nullable'],
            'content' => ['required', 'max:120']
        ];
    }
    public function messages()
    {
        return [
            'first-name.required' => '名前を入力してください',
            'first-name.string' => '名前を文字列で入力してください',
            'family-name.required' => '苗字を入力してください',
            'family-name.string' => '苗字を文字列で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'post.required' => '郵便番号を入力してください',
            'post.digits_between' => '郵便番号をハイフンありの８文字で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'content.required' => 'ご意見を入力してください',
            'content.max' => 'ご意見を120文字以下で入力してください',
        ];
    }
}
