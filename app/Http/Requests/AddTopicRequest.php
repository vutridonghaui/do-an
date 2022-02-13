<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTopicRequest extends FormRequest
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
//            'topicName'=>'unique:topics,topic_name',
            'topic_name'=>'required|unique:topics',
            'description'=>'required',
            'status'=>'required',
        ];
    }

    /*public function messages(){
        return[
            'TopicName.unique'=>'Tên danh mục đã bị trùng!'
        ];
    }*/
}
