<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormProduct extends FormRequest
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
            'name'=>'required|min:4',
            'desc'=>'required',
            'price'=>'required',
            'image'=>'required|max:10240'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Không được để trống',
            'desc.required'=>'Không được để trống',
            'price.required'=>'Không được để trống',
        ];
    }
}
