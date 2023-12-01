<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerModifPasswordRequest extends FormRequest
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
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function messages(){
        return[
            'password.required' => 'Le mot de passe est requis',
            'password.confirmed' => 'Les deux mots de passe de correspondent pas',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise'
        ];
    }
}
