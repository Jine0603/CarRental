<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required', 'regex:/^[a-zA-Z0-9_]+$/'],
            'password' => ['required', Password::min(8)->mixedCase()->symbols()]
            // 'full_name' => ['required', 'regex:/^[\pL\s\-]+$/u'],
            // 'email' => ['required', 'email'],
            // 'username' => ['required', 'regex:/^[a-zA-Z0-9_]+$/'],
            // 'password' => ['required', Password::min(8)->mixedCase()->symbols()]
            // 'confirm_password' => ['same:password']
        ];
    }
}
