<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContryRequest extends FormRequest
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
            'country_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'country_name.required' => 'Quốc gia không được để trống',
        ];
    }
}
