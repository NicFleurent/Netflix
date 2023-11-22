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
            'nomUsager' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'email' => 'required|email',
            'nom' => 'required',
            'prenom' => 'required',
            'role' => 'required'
        ];
    }

    public function messages(){
        return[
            'nomUsager.required' => 'Le nom d\'usager est requis',
            'password.required' => 'Le mot de passe est requis',
            'password.confirmed' => 'Les deux mots de passe de correspondent pas',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise',
            'email.required' => 'L\'adresse courriel est requise',
            'email.email' => 'Entrer une adresse courriel valide',
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'role.required' => 'Le role est requis'
        ];
    }
}
