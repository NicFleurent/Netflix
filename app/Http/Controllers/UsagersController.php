<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;
use Auth;


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
    
        return redirect()->route('usagers.showLogin')->with('message',"Déconnexion réussie");
    }    
}
