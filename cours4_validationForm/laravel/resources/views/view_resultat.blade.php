<!-- resources/views/view_resultat.blade.php -->
@extends('template_form')
@section('contenu')
<div>
    La date de début est {{$requete->input('start')}}
    La date de fin est {{$requete->input('end')}}
    La ville est {{$requete->input('lieu')}}
</div>
@endsection