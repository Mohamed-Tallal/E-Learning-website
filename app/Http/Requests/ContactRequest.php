<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required|min:50'

        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Enter your name .',
            'email.required' => 'Enter your email to contact with you .',
            'subject.required' => 'Enter the subject of problem',
            'message.required' => 'Enter your message',
            'message.min' => 'Message must be bigger than 50 char ',


        ];
    }
}
