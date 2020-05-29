@extends('layouts.app')

@section('content')

    <h1>Ajouter une recette</h1>


    <form class="recette_form" method="POST" action="/ajoutRecette">
        @csrf
        <input type="text" placeholder="Nom" class="form-control" id="nomRecette" name="nomRecette">
        <textarea placeholder="Détail de la recette" class="form-control" id="descriptionRecette" name="descriptionRecette"></textarea>
        <input type="text" placeholder="temps" class="form-control" id="tempsRecette" name="tempsRecette">
        <input type="text" placeholder="img" class="form-control" id="imgRecette" name="imgRecette">
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form>

@endsection