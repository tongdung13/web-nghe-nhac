<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SingerRequest extends FormRequest
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
            'singer_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'singer_name.required' => 'Tên ca sĩ không được để trống',
            'dob.required' => 'Ngày tháng năm sinh không được để trống',
            'gender.required' => 'Giới tính không được để trống',
            'description.requires' => 'Tiểu sử không được để trống',
            'image.required' => 'Hình ảnh không được để trống',
        ];
    }
}
