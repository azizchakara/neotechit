@extends('layout')

@section('content')

<h1>Nouveau Candidature</h1>
<form method="POST" action="{{route('candidats.store')}}">
    @csrf
    @include('candidats.form')
        <br>
        <button class="btn btn-block btn-success" type="submit">Ajouter Candidature</button>
    </form>
@endsection