<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acteurs = Personne::where('role','Acteur')
        ->orWhere('role','Actrice')
        ->get();

        $realisateurs = Personne::where('role','Réalisateur')
        ->orWhere('role','Réalisatrice')
        ->get();

        $producteurs = Personne::where('role','Producteur')
        ->orWhere('role','Productrice')
        ->get();

        $doubleurs = Personne::where('role','Doubleur')
        ->orWhere('role','Doubleuse')
        ->get();

        $dateAnniversaires= Personne::whereMonth('date_naissance','=',date('m'))
        ->get();
        return View('Personnes.index', compact('acteurs', 'realisateurs','producteurs','doubleurs','dateAnniversaires'));
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
     * @param object $personne
     */
    public function show(Personne $personne)
    {
        return View('personnes.show', compact('personne'));
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
