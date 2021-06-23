<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'fullname' => 'required|min:3|max:30|alpha',
            'username'=> 'required|min:5',
            'email' => 'email:rfc,dns|required|min:10|max:50|',
            'password'=> 'required|min:8|max:20',
            'confirm_password'=> 'required|min:8|max:20',
            'phone' => 'required|min:11|numeric',
            'company_name' => 'min:3|max:20',
            'city' => 'min:3|max:20',
            'country' => 'min:3|max:20',
        ];
    }
}
