<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required',
            'resume' => 'required',
            'duree' => 'required',
            'annee_sortie' => 'required',
            'lien_film' => 'required',
            'lien_pochette' => 'required',
            'realisateur_id' => 'required',
            'producteur_id' => 'required',
            'acteurprincipal_id' => 'required',
            'type' => 'required',
            'genre' => 'required',
            'brand' => 'required',
            'cote' => 'required',
            'rating' => 'required'
        ];
    }

    public function messages(){
        return[
            'titre.required' => 'Le titre est requis'
        ];
    }
}
