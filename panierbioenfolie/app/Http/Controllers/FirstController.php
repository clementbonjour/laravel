<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        $articles = ["1"=> "Article 1", 2 => "Article 2", 3 => "Article 3"];
        return view("firstcontroller.index", ["articles"=>$articles]);
    }
    public function about()
    {
        return view("firstcontroller.about");
    }
    public function recette()
    {
        return view("firstcontroller.recette");
    }
    public function abonnements()
    {
        return view("firstcontroller.abonnements");
    }
    public function contact()
    {
        return view("firstcontroller.contact");
    }
    public function moncompte()
    {
        return view("firstcontroller.moncompte");
    }
    public function article($id)
    {
        return view("firstcontroller.articles", ["id"=>$id]);
    }
}
