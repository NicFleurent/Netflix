<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmModifRequest extends FormRequest
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
            'annee_sortie' => 'required|size:4',
            'lien_film' => 'required|URL|regex:/embed/i',
            'lien_pochette' => 'image|mimes:png,jpeg,jpg,gif,webp|max:4096',
            'realisateur_id' => 'required',
            'producteur_id' => 'required',
            'acteurprincipal_id' => 'required',
            'type' => 'required',
            'genre' => 'required',
            'brand' => 'required',
            'cote' => 'required|numeric|min:0|max:10',
            'rating' => 'required'
        ];
    }

    public function messages(){
        return[
            'titre.required' => 'Le titre est requis',
            'resume.required' => 'Le synopsis est requis',
            'duree.required' => 'La durée est requise',
            'annee_sortie.required' => 'L\'année de sortie est requise',
            'annee_sortie.size' => 'L\'année doit être en 4 chiffres',
            'lien_film.required' => 'Le lien du trailer est requis',
            'lien_film.u_r_l' => 'Entrer une URL valide',
            'lien_film.regex' => 'Le lien doit être la source d\'un iframe',
            'lien_pochette.mimes' => 'Le type de fichier n\'est pas reconnu (png, jpeg, jpg, gif, webp)',
            'lien_pochette.max' => 'La taille de l\'image ne peut pas dépasser 4096Kb.',
            'realisateur_id.required' => 'Le réalisateur est requis',
            'producteur_id.required' => 'Le producteur est requis',
            'acteurprincipal_id.required' => 'L\'acteur principal est requis',
            'type.required' => 'Le type est requis',
            'genre.required' => 'Le genre est requis',
            'brand.required' => 'La marque est requise',
            'cote.required' => 'La cote est requise',
            'cote.numeric' => 'La cote doit être un chiffre',
            'cote.min' => 'La cote doit être d\'au moins 0',
            'cote.max' => 'La cote doit être d\'au plus 10',
            'rating.required' => 'La classification est requise'
        ];
    }
}
