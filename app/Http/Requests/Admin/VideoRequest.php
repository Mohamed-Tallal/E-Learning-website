<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'name' => 'required',
            'urlVideo' => 'required',
            'descripe' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'enter name of video',
            'urlVideo.required' => 'enter key of your video ',
            'descripe.required' => 'describe your video '

            ];
    }
}
