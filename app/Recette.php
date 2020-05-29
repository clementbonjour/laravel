<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    public $table = 'recette';

    public $timestamps = false;


    public function ingredient() {
        return $this->belongsToMany('App\Ingredient', 'contient', 'idRecette', 'idIngredient') ->withPivot('quantité');
    }
}
