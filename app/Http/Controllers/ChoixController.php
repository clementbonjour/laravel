<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Choix;
use App\Abonnement;
use App\Recette;


// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class choixController extends Controller
{


    public function ajoutChoix($idUser)
    {
        $recettes = DB::table('recette')->get();
        $abonnement = Abonnement::all()->where('idUser', $idUser);
        return view('Choix.choix', ['recettes' => $recettes, 'abonnement' => $abonnement]);
    }    

    public function store($idUser, Request $request)
    {
        $choix = new Abonnement();

        $choix->idUser = $idUser;
        $choix->semaine = 1;
        $choix->idRecette = $request->input('repas');

        $choix->save();

        return view('Abonnement.abonnement');
    }
}