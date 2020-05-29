@extends('layouts.app')

@section('content')
<div class="abo">
    <h1>S'abonner</h1>

    <div>{{ Auth::user()->name}}</div>

    @forelse($abonnement as $a)
            <p>{{$a->nb_personne}} personne</p>
            <p>{{$a->nb_repas}} repas</p>
            <a href="/choix/create/{{ Auth::user()->id}}" class="dropdown-item">Choisir mes repas</a>

            <p>Il y a encore {{$a->nb_repas}} repas dans votre abonnement! </p>
    @empty
        <p>Vous n'avez pas d'abonnement</p>
        <a href="/ajoutAbonnement/create" class="dropdown-item">s'abonner</a>
    @endforelse




    <form action="/ajoutAbonnement" class="form-group">

    </form>
</div>
@endsection
