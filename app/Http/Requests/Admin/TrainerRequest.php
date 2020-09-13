<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TrainerRequest extends FormRequest
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
          'name' => 'required|min:3',
          'img' => 'required',
          'phone' => 'required',
            'specilaty' => 'min:5',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'enter your name',
            'name.min' => 'name must be bigger than 3 char',
            'img.required' => 'must be required',
            'phone.required' => 'enter your phone ',
            'specilaty.min' => 'specialty must bigger than 5 char '
        ];
    }
}
