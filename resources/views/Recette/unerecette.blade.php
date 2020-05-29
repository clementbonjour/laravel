@extends('layouts.app')

@section('content')

<p><a class="boutonretour" href="/recette">Retour au recettes</a></p>

<div class="img_recette">
<img class="img_recette_1" src="{{$recette->img}}" />
</div>
<div class="description">
<h1>{{$recette->nom}}</h1>
<p class="text_description">{{$recette->temps}}</p>
<p>{{$recette->description}}</p>
</div>

        @foreach($recette->ingredient as $i)
            <div>{{$i->pivot->quantité}} {{$i->nom}}</div>
		@endforeach



@endsection
