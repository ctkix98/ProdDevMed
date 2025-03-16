<!-- resources/views/view_resultat.blade.php -->
@extends('template_form')
<h1>Enregistrement de manifestation</h1>
@section('contenu')
<form action="{{ url('traiteFormulaire') }}" method="post" accept-charset="UTF-8">
@csrf
    <ul>
        <li>
            <label for="start">Entrez une date de début de la manifestation : </label>
            <input type="date" name="start" id="start" />
        </li>
        <li>
            <label for="end">Entrez une date de fin de la manifestation : </label>
            <input type="date" name="end" id="end" />
        </li>
        <li>
            <label for="lieu">Entrez la ville de la manifestation</label><br>
            <input type="text" id="lieu" name="lieu"><br>
        </li>
    </ul>
    <input type="submit" name="submit" value="Envoyer" />
</form>