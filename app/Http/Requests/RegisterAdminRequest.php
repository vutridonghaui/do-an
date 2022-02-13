<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAdminRequest extends FormRequest
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
            'last_name'=>'required',
            'first_name'=>'required',
//            'phone'=>'required|min:10|numeric',
            'email'=>'unique:users|email|required',
            'password' => ['required','string','min:10','regex:/[a-z]/',

                'regex:/[A-Z]/',

                'regex:/[a-z]/',

                'regex:/[0-9]/',

                'regex:/[@$!%*#?&]/'
            ],
//            'password' => 'required|min:6',
            're_password' => 'required|same:password',
        ];
    }
}
