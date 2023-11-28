<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Film;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PersonneRequest;
use App\Http\Requests\PersonneModifRequest;
use Illuminate\Support\Facades\File;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acteurs = Personne::where('role', 'Acteur')
            ->orWhere('role', 'Actrice')
            ->get();

        $realisateurs = Personne::where('role', 'Réalisateur')
            ->orWhere('role', 'Réalisatrice')
            ->get();

        $producteurs = Personne::where('role', 'Producteur')
            ->orWhere('role', 'Productrice')
            ->get();

        $doubleurs = Personne::where('role', 'Doubleur')
            ->orWhere('role', 'Doubleuse')
            ->get();

        $dateAnniversaires = Personne::whereMonth('date_naissance', '=', date('m'))
            ->get();

        return View('Personnes.index', compact('acteurs', 'realisateurs', 'producteurs', 'doubleurs', 'dateAnniversaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonneRequest $request)
    {
        try {
            $personne = new Personne($request->all());
            $uploadedFile = $request->file('lien_photo');
            $nomFichierUnique = str_replace(' ', '_', $personne->nom . '-' . uniqid() . '.' . $uploadedFile->extension());
            try {
                $request->lien_photo->move(public_path('img/personnes'), $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreur lors du téléchargement du fichier.", [$e]);
            }
            $personne->lien_photo = 'img/personnes/' . $nomFichierUnique;
            $personne->save();
            $nomPersonne = $request->input('nom');
            return redirect()->route('personnes.index')->with('message', "Vous avez bien ajouté " . $nomPersonne . " !");
        } catch (\Throwable $e) {
            //Permet de gérer l'erreur
            Log::debug($e);
            return redirect()->route('personnes.index')->withErrors(['L\'ajout n\'a pas fonctionné']);
        }
        return redirect()->route('personnes.index');
    }

    /**
     * Display the specified resource.
     * @param object $personne
     */
    public function show(Personne $personne)
    {
        return View('personnes.show', compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        return View('personnes.edit', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonneModifRequest $request, Personne $personne)
    {
        try {
            $personne->nom = $request->nom;
            $personne->date_naissance = $request->date_naissance;
            if (isset($request->lien_photo)) {
                if (File::exists($personne->lien_photo)) {
                    File::delete($personne->lien_photo);
                }
                $uploadedFile = $request->file('lien_photo');
                $nomFichierUnique = str_replace(' ', '_', $personne->nom . '-' . uniqid() . '.' . $uploadedFile->extension());
                try {
                    $request->lien_photo->move(public_path('img/personnes'), $nomFichierUnique);
                } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                    Log::error("Erreur lors du téléchargement du fichier.", [$e]);
                }
                $personne->lien_photo =  'img/personnes/' . $nomFichierUnique;
            }

            $personne->role = $request->role;
            $personne->save();
            $nomPersonne = $personne->nom;

            return redirect()->route('personnes.index')->with('message', "Vous avez bien modifié " . $nomPersonne . " !");
        } catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('personnes.index')->withErrors(['La modification n\'a pas fonctionnée']);
        }
        return redirect()->route('personnes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $personne = Personne::findOrFail($id);
            $nomFilms = "";
            $i = 1;

            if (File::exists($personne->lien_photo)) {
                File::delete($personne->lien_photo);
            }

            if (count($personne->filmsJouesAP) > 0) {

                foreach ($personne->filmsJouesAP as $filmJoueAP) {
                    if ($i < count($personne->filmsJouesAP)) {
                        $nomFilms .=  $filmJoueAP->titre . ' ,';
                    } else {
                        $nomFilms .= $filmJoueAP->titre;
                    }
                    $i++;
                }
                return redirect()->route('personnes.index')->withErrors(['Vous devez supprimer ses films avant : ' . $nomFilms]);
            }

            if (count($personne->filmsRealises) > 0) {

                foreach ($personne->filmsRealises as $filmRealise) {
                    if ($i < count($personne->filmsRealises)) {
                        $nomFilms .= $filmRealise->titre . ' ,';
                    } else {
                        $nomFilms .= $filmRealise->titre;
                    }
                    $i++;
                }
                return redirect()->route('personnes.index')->withErrors(['Vous devez supprimer ses films avant : ' . $nomFilms]);
            }
            if (count($personne->filmsProduits) > 0) {
                foreach ($personne->filmsProduits as $filmProduit) {
                    if ($i < count($personne->filmsProduits)) {
                        $nomFilms .= $filmProduit->titre . ' ,';
                    } else {
                        $nomFilms .= $filmProduit->titre;
                    }
                    $i++;
                }
                return redirect()->route('personnes.index')->withErrors(['Vous devez supprimer ses films avant : ' . $nomFilms]);
            }
            $personne->roles()->detach();
            $personne->delete();
            return redirect()->route('personnes.index')->with('message', "Suppression de " . $personne->nom . " réussi!");
        } catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);

            // dd($personne->filmsJouesAP());
            return redirect()->route('personnes.index')->withErrors(['La suppression n\'a pas fonctionné']);
        }
    }
}
