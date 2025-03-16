<!-- resources/views/view_form.blade.php -->
@extends('template_form')
@section('contenu')
<form action="{{ url('traiteFormulaire') }}" method="post" accept-charset="UTF-8">
    @csrf

    <ul>
        @php
        $compteur = 1;
        @endphp

        @foreach (file('storage/people.txt') as $name )
        @php $name = trim($name); @endphp
        <li>
            <input type="checkbox" id="name-{{ $compteur }}" name="name[]" value="{{ $name }}" />
            <label for="name-{{ $compteur }}">{{$name}}</label>
        </li>
        @php
        $compteur++;
        @endphp
        @endforeach
    </ul>

    <ul>
        <li>
            <label for="start">Entrez une heure de début : </label>
            <input type="time" id="start" name="start">
        </li>

        <li>
            <label for="end">Entrez une heure de fin : </label>
            <input type="time" id="end" name="end">
        </li>

        <li>
            <label for="mid">Entrez la durée entre les entrevues : </label>
            <input type="time" id="mid" name="mid">
        </li>
    </ul>
    <input type="submit" name="submit" value="Envoyer" />
</form>

@endsection