<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePostRequest extends Request
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
            'title' => 'required|between:5,255',
            'type' => 'required',
            'content' => 'required|min:20'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề chưa được nhập',
            'type.required' => 'Loại bài chưa được nhập',
            'content.required'  => 'Nội dung cần được nhập',
        ];
    }
}
