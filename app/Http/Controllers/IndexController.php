<?php


namespace App\Http\Controllers;


use App\Recette;
use Illuminate\Http\Request;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $recettes = DB::table('recette')->get();
        return view('Home.index', ['recette' => $recettes]);
    }
    
    public function comment(){
        return view('Home.comment');
    }
    

}