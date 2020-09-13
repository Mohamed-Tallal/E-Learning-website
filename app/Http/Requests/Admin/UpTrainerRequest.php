<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpTrainerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'phone' => 'required',
            'specilaty' => 'min:5',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'enter your name',
            'name.min' => 'name must be bigger than 3 char',
            'phone.required' => 'enter your phone ',
            'specilaty.min' => 'specialty must bigger than 5 char '
        ];
    }
}
