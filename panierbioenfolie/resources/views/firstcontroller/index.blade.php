@extends('layouts.template')

@section('content')
<h1>La super page de mon application </h1>

<ul>
    @foreach($articles as $id => $nom)
        <li><a href="/laravel/panierbioenfolie/public/article/{{$id}}">{{$nom}}</a></li>
    @endforeach
</ul>
@endsection
