<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditInforUserRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'digits:10',
            'address'=>'required',
            'birthday'=>'date_format:Y-m-d|before:16 years ago|nullable',
            'password'=> ['sometimes','nullable',
                'min:10',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ],
            'status'=>'required',
            'gender'=>'required',

        ];
    }
}
