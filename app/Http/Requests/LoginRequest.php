<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','alpha','min:6','max:12'], //min 6 char long and max 12 char
            'email' => ['required','email'],
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'The user name field is required',
            'name.min' => 'The user name should atleast be 6 characters long',
            'name.alpha' => 'User name should only contain letters',
            'email.email' => 'Kindly type a valid email ID'
        ];
    }
}
