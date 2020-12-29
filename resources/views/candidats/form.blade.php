<div class="form-group">
    <label for="nom">Nom</label>
    <input class="form-control" name="nom" id="nom" type="text" value="{{ old('nom',$candidat->nom ?? null) }}">
</div>
<div class="form-group">
    <label for="prenom">Prenom</label>
<input class="form-control" name="prenom" id="prenom" type="text" value="{{ old('prenom', $candidat->prenom ?? null) }}">
</div>
<div>
    <label  for="Date">Date de recrutement</label>
    <input class="form-control" name="date_recrutement" id="date_recrutement" type="date" value="{{ old('date_recrutement',$candidat->date_recrutement ?? null)}}">
</div>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error) 
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif