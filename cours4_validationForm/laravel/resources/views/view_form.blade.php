<!-- resources/views/view_resultat.blade.php -->
@extends('template_contact')
<h1>Enregistrement de manifestation</h1>
@section('contenu')
<form action="{{ url('traiteFormulaire') }}" method="post" accept-charset="UTF-8">
    @csrf
    <ul>
        <li>
            <label for="start">Entrez une date de début de la manifestation :</label>
            <input type="date" name="start" id="start"
                class="form-control {{ $errors->has('start') ? 'is-invalid' : '' }}"
                value="{{ old('start') }}">
            {!! $errors->first('start', '<div class="invalid-feedback">:message</div>') !!}
        </li>

        <li>
            <label for="end">Entrez une date de fin de la manifestation :</label>
            <input type="date" name="end" id="end"
                class="form-control {{ $errors->has('end') ? 'is-invalid' : '' }}"
                value="{{ old('end') }}">
            {!! $errors->first('end', '<div class="invalid-feedback">:message</div>') !!}
        </li>

        <li>
            <label for="lieu">Entrez la ville de la manifestation :</label><br>
            <input type="text" id="lieu" name="lieu"
                class="form-control {{ $errors->has('lieu') ? 'is-invalid' : '' }}"
                value="{{ old('lieu') }}">
            {!! $errors->first('lieu', '<div class="invalid-feedback">:message</div>') !!}
        </li>
    </ul>

    <input type="submit" name="submit" value="Envoyer" />
</form>