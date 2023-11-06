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
            'titre.required' => 'Le titre est requis',
            'resume.required' => 'Le synopsis est requis',
            'duree.required' => 'La durée est requise',
            'annee_sortie.required' => 'L\'année de sortie est requise',
            'lien_film.required' => 'Le lien du trailer est requis',
            'lien_pochette.required' => 'Le lien du poster est requis',
            'realisateur_id.required' => 'Le réalisateur est requis',
            'producteur_id.required' => 'Le producteur est requis',
            'acteurprincipal_id.required' => 'L\'acteur principal est requis',
            'type.required' => 'Le type est requis',
            'genre.required' => 'Le genre est requis',
            'brand.required' => 'La marque est requise',
            'cote.required' => 'La cote est requise',
            'rating.required' => 'La classification est requise'
        ];
    }
}
