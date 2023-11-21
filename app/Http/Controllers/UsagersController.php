<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\facades\Hash;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Session;
use App\Http\Requests\UsagerRequest;


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
}
