<?php


namespace App\Http\Controllers;

use App\Abonnement;
use Illuminate\Http\Request;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class AbonnementController extends Controller
{

    public function abonnement($idUser)
    {
        $abonnement = Abonnement::all()->where('idUser', $idUser);
        return view("Abonnement.abonnement", ["abonnement" => $abonnement]);
    }    


    public function ajoutAbonnement(){
        return view("Abonnement.ajoutAbonnement");
    }

    public function store($idUser, Request $request){
        $abonnement = new Abonnement();

        $abonnement->idUser = $idUser;
        $abonnement->nb_personne = $request->input('nbPersonne');
        $abonnement->nb_repas = $request->input('nbRepas');

        $abonnement->save();

        return view('Abonnement.abonnement');
    }


}