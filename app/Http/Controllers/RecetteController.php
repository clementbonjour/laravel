<?php


namespace App\Http\Controllers;

use App\Recette;
use Illuminate\Http\Request;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class RecetteController extends Controller
{

    public function recette()
    {
        $recettes = DB::table('recette')->get();
        return view('Recette.recette', ['recette' => $recettes]);
    }    

    public function unerecette($id){
        $recette = Recette::findOrFail($id);
        return view("Recette.unerecette", ["recette" => $recette]);
    }

}