@extends('layout')

@section('content')

<h1>Edit Candidature</h1>
<form method="POST" action="{{route('candidats.update',['candidat'=>$candidat->id])}}">
    @csrf
    @method('PUT')
       @include('candidats.form')
        <br>
        <button class="btn btn-warning" type="submit">Modifier Candidature</button>
    </form>
@endsection