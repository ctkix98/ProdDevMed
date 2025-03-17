<!-- resources/views/view_resultat.blade.php -->
@extends('template_form')
@section('contenu')
<div>
La date de début est {{ \Carbon\Carbon::parse($requete->input('start'))->locale('fr')->format('d F Y') }}
La date de fin est {{ \Carbon\Carbon::parse($requete->input('end'))->locale('fr')->format('d F Y') }}
    La ville est {{$requete->input('lieu')}}
</div>
@endsection