<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            "comment" => ["required","string","between:10,60"],
        ];
    }

    public function messages(): array
    {
        return [
            "comment.required" => "ale weź napisz coś",
            "comment.string"=> "nikt tego na ludzki nie będzie tłumaczył",
            "comment.between"=> "musisz napisać od 10 do 60 słów",
        ];
    }
}
