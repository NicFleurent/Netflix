<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\facades\Hash;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Session;
use App\Http\Requests\UsagerRequest;
use App\Http\Requests\UsagerModifInfoRequest;
use App\Http\Requests\UsagerModifPasswordRequest;


class UsagersController extends Controller
{
     public function showLoginForm()
    {
        return View('usagers.login');
    } 
    
    public function login(Request $request)
    {
        $reussi=Auth::attempt(['nomUsager' => $request->nomUsager,'password' => $request->password]);
        if($reussi){
            Session::put('nomUsager', $request->nomUsager);
            return redirect()->route('films.index')->with('message',"Connexion réussie");
        }
         else{
            return redirect()->route('login')->withErrors(['Votre courriel ou mot de passe est invalide']);
        }
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        Session::forget('usager');
    
        return redirect()->route('usagers.showLogin')->with('message',"Déconnexion réussie");
    }  
    
    /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       return View('usagers.create');
   }  

   /**
    * Store a newly created resource in storage.
    */
   public function store(UsagerRequest $request)
   {
       try {
           $usager = new Usager($request->all());
           $usager->password = Hash::make($request->password);
           $usager->save();
           return redirect()->route('login')->with('message', "Vous avez bien ajouté " . $usager->nomUsager . " !");
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
   public function show()
   {
        $nomUsagerSession = Session::get('nomUsager');
        $usagers = Usager::where('nomUsager', $nomUsagerSession)->get();
        return View('Usagers.show', compact('usagers'));
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Usager $usager)
   {
       return View('usagers.edit', compact('usager'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(UsagerModifInfoRequest $request, Usager $usager)
   {
       try {
           $usager->nomUsager = $request->nomUsager;
           $usager->email = $request->email;
           $usager->nom = $request->nom;
           $usager->prenom = $request->prenom;
           $usager->password = $request->password;
           $usager->role = $request->role;
           $usager->save();
           Session::put('nomUsager', $request->nomUsager);
           return redirect()->route('films.index')->with('message', "Vous avez bien modifié votre compte !");
       }
   
       catch (\Throwable $e) {
           //Gérer l'erreur
           Log::debug($e);
           return redirect()->route('films.index')->withErrors('La modification n\'a pas fonctionné');
       }
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function editPassword(Usager $usager)
   {
       return View('usagers.editPassword', compact('usager'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function updatePassword(UsagerModifPasswordRequest $request, Usager $usager)
   {
       try {
           $usager->nomUsager = $request->nomUsager;
           $usager->email = $request->email;
           $usager->nom = $request->nom;
           $usager->prenom = $request->prenom;
           $usager->password = Hash::make($request->password);
           $usager->role = $request->role;
           $usager->save();
           return redirect()->route('films.index')->with('message', "Vous avez bien modifié votre mot de passe !");
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
   public function destroy(string $id, Request $request)
   {
       try{
           $usager = Usager::findOrFail($id);

           //Si un film a des acteurs, on ne peut pas le supprimer.
           $usager->delete();
           
           Auth::logout();
        
           $request->session()->invalidate();
        
           $request->session()->regenerateToken();

           Session::forget('usager');

           return redirect()->route('films.index')->with('message', "Suppression de votre compte réussi!");
       }
       catch(\Throwable $e){
           //Gérer l'erreur
           Log::debug($e);
           return redirect()->route('films.index')->withErrors(['la suppression n\'a pas fonctionné']); 
       }
       return redirect()->route('films.index');
           
   }
   
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usagers = Usager::All();
        return View('usagers.index', compact('usagers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyAdmin(string $id)
    {
        try{
            $usager = Usager::findOrFail($id);
 
            $nomUsagerSession = Session::get('nomUsager');
            $usagersSession = Usager::where('nomUsager', $nomUsagerSession)->get();
            
            foreach($usagersSession as $usagerSession){
                if($usager->nomUsager === $usagerSession->nomUsager){
                    return redirect()->route('usagers.index')->withErrors(['Vous ne pouvez pas supprimer votre propre compte ici']); 
                }
            }

            $usager->delete();
 
            return redirect()->route('usagers.index')->with('message', "Suppression de " . $usager->nomUsager . " réussi!");
        }
        catch(\Throwable $e){
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['la suppression n\'a pas fonctionné']); 
        }
        return redirect()->route('usagers.index');
            
    }
}
