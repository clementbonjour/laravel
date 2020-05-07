<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
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
    }
}
