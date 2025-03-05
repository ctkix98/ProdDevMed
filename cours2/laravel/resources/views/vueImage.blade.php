@extends('monTemplate')
@section('titre')
Ma belle image
@endsection
@section('contenu')
<p>
    Voici ma première image :<br><br>
    <img src="{{ asset('../cours2/laravel/public/images/image.jpg') }}" alt="Mon image" />
</p>
@endsection