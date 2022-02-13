<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditBlogCategoryRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
           /* 'blog_category_name'=>'unique:blog_categories,'.$this->segment(4).',id',
            'description'=>'required',
            'status'=>'required',*/
            'blog_category_name' => ['required', Rule::unique('blog_categories')->ignore($request->id )],
            'description'=>'required',
            'status'=>'required',
        ];
    }
}
