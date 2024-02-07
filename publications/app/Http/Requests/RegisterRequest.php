<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'between:3,20'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            //'password' => ['required', 'string', 'min:8', 'confirmed']
            'password' => [Password::min(6)->numbers()->mixedCase()]
        ];
    }
    public function messages(): array
    {
        return [
            'password.confirmed' => 'The passwords do not match',
            "password.require"=> "You want to get hacked, don't you",
            "password.min"=> "You want to get hacked, don't you",
            'name.required'=> 'Wft I bet you have a name, mate',
            'name.string' => "You Elon Musk's son or what",
            'email.required'=> "Wft I bet you have an email mate, it's 21st century",
            "email.email"=> "You were supposed to enter your email",
            "email.max"=> "Wtf you got some russian temp mail?",
        ];
    }
}
