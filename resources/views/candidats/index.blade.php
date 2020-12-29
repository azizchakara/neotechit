@extends('layout')
@section('content')
  <h1>Liste des candidats</h1>
  <ul class="list-group">
      @foreach ($candidats as $candidat)
      <li class="list-group-item">
      <h2> <a href="{{ route('candidats.show',['candidat'=>$candidat->id])}}">{{$candidat->nom}}  {{$candidat->prenom}}</a> </h2>
      
      Date de recrutement: <em>{{date('d/m/Y', strtotime($candidat->date_recrutement))}}</em><br>
      <a class="btn btn-warning" href="{{ route('candidats.edit',['candidat'=>$candidat->id])}}">Edit</a>

      <form style="display: inline" method="POST" action="{{route('candidats.destroy',['candidat'=>$candidat->id])}}">
        @csrf
        @method('DELETE')    
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </li>
      @endforeach
  </ul>  
@endsection