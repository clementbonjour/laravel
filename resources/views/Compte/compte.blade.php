@extends('layouts.app')

@section('content')
<div class="moncompte">
    <h1>Mon compte</h1>
    <h4>{{ Auth::user()->name}}</h4>
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        {{ __('Déconnexion') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
        @csrf
    </form>




    @if (Auth::user()->name == 'admin')

        <a class="dropdown-item" href='/ajoutRecette/create' >Ajouter une recette</a>

    @endif
</div>
@endsection
