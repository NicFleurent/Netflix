<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Contracts\View\View;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filmsDernieresSorties = Film::orderby('annee_sortie', 'desc')
                                    ->take(8)
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
