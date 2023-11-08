<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\ActeurFilmRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

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
                                ->take(4)
                                ->get();

        $filmsMeilleur = Film::orderby('cote', 'desc')
                            ->take(4)
                            ->get();

        $filmsCourt = Film::orderby('duree', 'asc')
                            ->take(4)
                            ->get();

        $filmsComedie = Film::where('genre', 'Comédie')
                            ->orderby('cote', 'desc')
                            ->take(4)
                            ->get();

        return View('Films.index', compact('filmsDernieresSorties', 'filmsToutPublic', 'filmsMeilleur', 'filmsCourt','filmsComedie'));
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
            $film->save();
        }
    
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('films.index');
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
            }
            else{
                $film->acteurs()->attach($personne);
                $film->save();
            }
        }
    
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('films.index');
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
        }
    
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('films.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
