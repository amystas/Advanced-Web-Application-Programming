<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicationRequest extends FormRequest
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
            'title' => ['required', 'string', 'between:3,50'],
            'content' => ['required', 'string', 'between:10,58900'],
            'author_id' => ['required', 'numeric', 'exists:users,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.between' => "You don't get this character counting thing, do you",
            'content.between' => "You don't get this character counting thing, do you",
            'author_id.exists' => "Don't mention them. They were too controversial so they're no longer in our database",
            'title.required' => "You forgor the title you silly ass",
            'content.required' => "You forgor the text you silly ass",
            'author_id.required' => "You forgor the author you silly ass",
        ];
    }
}
