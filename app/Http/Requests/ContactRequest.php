<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'    => ['required','string','max:120','regex:/^[a-zA-Z\-\' ]*$/'],
            'email'   => ['required','email','max:255'],
            'message' => ['required','string','max:5000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.regex' => 'Name may only contain letters, spaces, hyphens, and apostrophes.',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}