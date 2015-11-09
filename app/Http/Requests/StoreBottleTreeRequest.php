<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBottleTreeRequest extends Request
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
            'code' => 'required',
            'nameNormal' => 'required',
            'nameScience' => 'required',
            'info' => 'required'
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
            'code.required' => 'Mã cần được nhậpp',
            'nameNormal.required' => 'Tên thông thường cần được nhập',
            'nameScience.required' => 'Tên khoa học cần được nhập',
            'info.required'  => 'Thông tin cần được nhập'
        ];
    }
}
