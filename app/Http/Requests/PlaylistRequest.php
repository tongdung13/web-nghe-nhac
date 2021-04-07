<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaylistRequest extends FormRequest
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
            'music_name' => 'required',
            'image' => 'required',
            'audio' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'music_name.required' => 'Tên bài hát không được để trống',
            'image.required' => 'Hình ảnh không được để trống',
            'audio.required' => 'Bài hát không được để trống',
        ];
    }
}
