<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormLogin extends FormRequest
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
            'email' => 'required|exists:users,email|email',
            'password' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Ban phai nhap email',
            'password.required'=>'Ban phai nhap password'
        ];
    }
}
