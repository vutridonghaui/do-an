<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;

class ChangeInfoProfileRequest extends FormRequest
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
            'old_password'=> ['nullable', new MatchOldPassword],
            'new_password'=> ['sometimes','nullable',
                'min:10',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ],
            'confirm_password'=> 'sometimes|same:new_password|nullable',

        ];
    }
}
