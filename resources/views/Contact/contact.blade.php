@extends('layouts.app')

@section('content')
<div class="contact">
<h1>Nous contacter</h1>
<form>
    <input type="text" name="nom" placeholder="Nom ..."/>
    <input type="text" name="email" placeholder="Email ..."/>
    <input type="text" name="objet" placeholder="Objet ..."/>
    <input class="message" type="textarea" name="message" placeholder="Message ..."/>
    <input class="submit" type="submit" name="envoyer" placeholder="Envoyer ..."/>
</form>
</div>
@endsection
