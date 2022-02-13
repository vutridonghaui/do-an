<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCouponRequest extends FormRequest
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
            'code' =>'required',
            'coupon_type' => 'required',
            'coupon_value' => 'required|numeric|min:0|not_in:0',
            'times_limit' => 'required|numeric|min:0|not_in:0',
            'expired_coupon' => 'required',
            'description' =>'required',
            'status'=>'required'
        ];
    }
}
