@extends('layouts.app')

@section('content')

    <h1>S'abonner</h1>


    <form class="abonnement_form" method="POST" action="/ajoutAbonnement/{{Auth::user()->id}}">
        @csrf
        <input type="number" placeholder="nombre de personne" class="form-control" id="nbPersonne" name="nbPersonne">
        <input type="number" placeholder="nombre de repas" class="form-control" id="nbRepas" name="nbRepas">
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form>

@endsection