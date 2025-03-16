<!-- resources/views/view_resultat.blade.php -->
@extends('template_form')
@section('contenu')
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Heure de début</th>
            <th>Heure de fin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resultat as $data)
            <tr>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['start_time'] }}</td>
                <td>{{ $data['end_time'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection