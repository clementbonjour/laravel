@extends('layouts.app')

@section('content')

    <h1>Choix de mes recette</h1>
    @foreach($abonnement as $a)
    <p>Choisir {{$a->nb_repas}}recette(s)</p>
    @endforeach

    <p>Ajouter une recette à mon abonnement</p>

    <form class="choix_form" method="POST" action="/ajoutChoix/{{Auth::user()->id}}">
        @csrf        
        <div class="form-check">
                @foreach($recettes as $r)
                    <input class="form-check-input" type="radio" id="repas">
                    <label class="form-check-label" for="repas">
                        {{$r->nom}}
                    </label>
                    </br>
                @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form>

@endsection