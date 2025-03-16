<!-- resources/views/view_resultat.blade.php -->
@extends('template_form')
@section('contenu')
<div>
    Le nom que vous avez saisi est {{$requete->input('nom')}}
</div>
@endsection