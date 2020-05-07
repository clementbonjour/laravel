<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
<<<<<<< HEAD
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
=======
    public function recette() {
        return view("FirstController.recette");
    }
    public function index() {
        $articles = [1 => "article 1", 2 => "article 2", 3 => "article 3"];
        return view("FirstController.index", ["articles"=>$articles]);
    }
    public function about() {
        return view("FirstController.about");
    }
    public function article($id) {
        return view("FirstController.article", ["id"=> $id ]);
>>>>>>> 31924ef2955dd4eea8c19f79eff8db577e97c224
    }
}
