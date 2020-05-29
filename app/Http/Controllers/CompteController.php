<?php


namespace App\Http\Controllers;

use App\User;
use App\Recette;
use Illuminate\Http\Request;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{

    public function compte()
    {
        return view('Compte.compte');
    }    

    public function ajoutRecette(){
        return view('Compte.ajoutRecette');
    }

    public function store(Request $request){
        $recette = new Recette();

        $recette->nom = $request->input('nomRecette');
        $recette->description = $request->input('descriptionRecette');
        $recette->temps = $request->input('tempsRecette');
        $recette->img = $request->input('imgRecette');

        $recette->save();

        return view('Compte.compte');
    }
}