@extends('layout')
@section('content')

    <h1>{{$candidat->nom}} {{$candidat->prenom}}</h1>
    <p>Date de recrutement: {{  date('d/m/Y', strtotime($candidat->date_recrutement)) }}</p>

@endsection