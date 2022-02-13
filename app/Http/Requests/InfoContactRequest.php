<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoContactRequest extends FormRequest
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
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'subject'=>'required',
            'message'=>'required|min:50'
        ];
    }
}
