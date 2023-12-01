<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerModifInfoRequest extends FormRequest
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
            'email' => 'required|email',
            'nom' => 'required',
            'prenom' => 'required'
        ];
    }

    public function messages(){
        return[
            'email.required' => 'L\'adresse courriel est requise',
            'email.email' => 'Entrer une adresse courriel valide',
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis'
        ];
    }
}
