<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nom' =>'required',
            'date_naissance' => 'required|before:today',
            'lien_photo' => 'required|URL',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nom.required' => 'Le nom est requis',
            'date_naissance.required' => 'La date de naissance est requise.',
            'date_naissance.before' => 'Veuillez entrer une date valide.',
            'lien_photo.required' => 'Un lien pour la photo est requis.',
            'lien_photo.u_r_l' => 'Veuillez entrer un lien valide.',
            'role.required' => 'Veuillez choisir un rôle.'
        ];
    }
}
