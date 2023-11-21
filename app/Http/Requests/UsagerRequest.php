<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
            'nomUsager' => 'required|unique:usagers',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'email' => 'required|email|unique:usagers',
            'nom' => 'required',
            'prenom' => 'required',
            'role' => 'required'
        ];
    }

    public function messages(){
        return[
            'nomUsager.required' => 'Le nom d\'usager est requis',
            'nomUsager.unique' => 'Ce nom d\'usager est déjà pris',
            'password.required' => 'Le mot de passe est requis',
            'password.confirmed' => 'Les deux mots de passe de correspondent pas',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise',
            'email.required' => 'L\'adresse courriel est requise',
            'email.email' => 'Entrer une adresse courriel valide',
            'email.unique' => 'Ce email est déjà pris',
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'role.required' => 'Le role est requis'
        ];
    }
}
