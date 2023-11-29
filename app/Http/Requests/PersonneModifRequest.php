<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneModifRequest extends FormRequest
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
            'nom' =>'required',
            'date_naissance' => 'required|before:today',
            'lien_photo' => 'image|mimes:png,jpeg,jpg,gif,svg,webp,avif|max:4096',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nom.required' => 'Le nom est requis',
            'date_naissance.required' => 'La date de naissance est requise.',
            'date_naissance.before' => 'Veuillez entrer une date valide.',
            'lien_photo.image' => 'Le fichier doit être une image.',
            'lien_photo.mimes' => 'Le type de fichier n\'est pas reconnu.(png,jpeg,jpg,gif,svg,webp,avif)',
            'lien_photo.max' => 'La taille de l\'image ne peut pas dépasse 4096Kb.',
            'role.required' => 'Veuillez choisir un rôle.'         
        ];
    }
}
