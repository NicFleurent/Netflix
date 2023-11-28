<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\ActeurFilmRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filmsDernieresSorties = Film::orderby('annee_sortie', 'desc')
                                    ->take(20)
                                    ->get();

        $filmsToutPublic = Film::where('rating', 'G')
                                ->orwhere('rating', 'PG')
                                ->orderby('annee_sortie', 'desc')
                                ->take(20)
                                ->get();

        $filmsMeilleur = Film::orderby('cote', 'desc')
                                ->take(4)
                                ->get();

        $filmsMeilleurEnfant = Film::where('rating', 'G')
                                    ->orwhere('rating', 'PG')
                                    ->orderby('cote', 'desc')
                                    ->take(4)
                                    ->get();

        $filmsCourt = Film::orderby('duree', 'asc')
                            ->take(4)
                            ->get();

        $filmsCourtEnfant = Film::where('rating', 'G')
                                ->orwhere('rating', 'PG')
                                ->orderby('duree', 'asc')
                                ->take(4)
                                ->get();

        $filmsComedie = Film::where('genre', 'Comédie')
                            ->orderby('cote', 'desc')
                            ->take(4)
                            ->get();

        $filmsComedieEnfant = Film::where('rating', 'G')
                                    ->orwhere('rating', 'PG')
                                    ->where('genre', 'Comédie')
                                    ->orderby('cote', 'desc')
                                    ->take(4)
                                    ->get();

        return View('Films.index', compact('filmsDernieresSorties', 'filmsToutPublic', 'filmsMeilleur', 'filmsMeilleurEnfant', 'filmsCourt', 'filmsCourtEnfant', 'filmsComedie', 'filmsComedieEnfant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personnes = Personne::orderby('nom')->get();
        return View('films.create', compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createActeurFilm()
    {
        $films = Film::orderby('titre')->get();
        $personnes = Personne::orderby('nom')->get();
        return View('films.createActeurFilm', compact('personnes', 'films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createActeurFilmShowFilm(Film $film)
    {
        $films = Film::orderby('titre')->get();
        $personnes = Personne::orderby('nom')->get();
        return View('films.createActeurFilmShowFilm', compact('personnes', 'films', 'film'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $request)
    {
        try {
            $film = new Film($request->all());

            $uploadedFile = $request->file('lien_pochette');
            $nomFichierUnique = str_replace(' ','_', $film->titre).'-'.uniqid().'.'.$uploadedFile->extension();

            try{
                $request->lien_pochette->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier.", [$e]);
            }

            $film->lien_pochette = 'img/films/' . $nomFichierUnique;
            $film->save();
            return redirect()->route('films.index')->with('message', "Vous avez bien ajouté " . $film->titre . " !");
        }
    
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('films.index')->withErrors('L\'ajout n\'a pas fonctionné');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeActeurFilm(ActeurFilmRequest $request)
    {
        try {
            $personne = Personne::find($request->personne_id);
            $film = Film::find($request->film_id);

            if($film->acteurs->contains($personne)){
                Log::debug("La relation existe déjà");
                return redirect()->route('films.index')->withErrors("La relation existe déjà");
            }
            else{
                $film->acteurs()->attach($personne);
                $film->save();
                return redirect()->route('films.index')->with('message', "La relation entre le film " . $film->titre . " et l'acteur " . $personne->nom . " a été ajouté!");
            }
        }
    
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('films.index')->withErrors('L\'ajout n\'a pas fonctionné');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return View('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $personnes = Personne::orderby('nom')->get();
        return View('films.edit', compact('film', 'personnes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        try {
            $film->titre = $request->titre;
            $film->resume = $request->resume;
            $film->duree = $request->duree;
            $film->annee_sortie = $request->annee_sortie;
            $film->lien_film = $request->lien_film;
            $film->lien_pochette = $request->lien_pochette;
            $film->type = $request->type;
            $film->genre = $request->genre;
            $film->brand = $request->brand;
            $film->cote = $request->cote;
            $film->rating = $request->rating;
            $film->realisateur_id = $request->realisateur_id;
            $film->producteur_id = $request->producteur_id;
            $film->acteurprincipal_id = $request->acteurprincipal_id;
            $film->save();
            return redirect()->route('films.index')->with('message', "Vous avez bien modifié " . $film->titre . " !");
        }
    
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('films.index')->withErrors('La modification n\'a pas fonctionné');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $film = Film::findOrFail($id);

            if(File::exists($film->lien_pochette)){
                File::delete($film->lien_pochette);
            }

            //Si un film a des acteurs, on ne peut pas le supprimer.
            $film->acteurs()->detach();
            $film->delete();

            return redirect()->route('films.index')->with('message', "Suppression de " . $film->titre . " réussi!");
        }
        catch(\Throwable $e){
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('films.index')->withErrors(['la suppression n\'a pas fonctionné']); 
        }
        return redirect()->route('films.index');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyActeurFilm(Film $film, Personne $personne)
    {
        try{
            //Si un film a des acteurs, on ne peut pas le supprimer.
            $film->acteurs()->detach($personne->id);

            return redirect()->route('films.show',[$film])->with('message', "Suppression de l'acteur ". $personne->nom . " pour le film " . $film->titre . " a réussi!");
        }
        catch(\Throwable $e){
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('films.index')->withErrors(['la suppression n\'a pas fonctionné']); 
        }
        return redirect()->route('films.show',[$film]);
            
    }
}
