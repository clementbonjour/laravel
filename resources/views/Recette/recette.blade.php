@extends('layouts.app')

@section('content')
<div class="display_recette">
<h1>Nos recette</h1>
<div class="container_recette">

        @foreach($recette as $r)
            <a href="/recette/{{$r->id}}" class="list-group list-group-recette" style="width:500px">
				<div class="list-group-item" id="img_recettes"><img style="max-height:200px;" src="{{$r->img}}"></div>
				<div class="list-group-item">{{$r->nom}}</div>
			</a>
		@endforeach

</div>
</div>
@endsection
