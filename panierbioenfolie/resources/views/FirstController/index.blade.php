@extends('layouts.template')
@section('content')
<ul>
    @foreach($articles as $id => $nom)
        <li>{{ $nom }}</li>
    @endforeach
</ul>
<h1>la super page de mon site</h1>
@endsection
