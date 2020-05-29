@extends('layouts.app')

@section('content')

<h1 class="title">Du producteur à votre assiette en 2 clic</h1>


<h2>Nos recette</h2>
<div class="container-recette">
        @foreach($recette as $r)
            <a href="/recette/{{$r->id}}" class="list-group list-group-recette" style="width:500px">
				<div class="list-group-item" id="img_recettes"><img  src="{{$r->img}}"></div>
				<div class="list-group-item">{{$r->nom}}</div>
			</a>
		@endforeach
</div>

@endsection
