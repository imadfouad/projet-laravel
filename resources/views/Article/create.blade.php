@extends('layouts.app')


@section('content')


<form class="container col-md-4 marg1" enctype="multipart/form-data" action="/article" method="post">

      {{ csrf_field() }}

  <div class="form-group">
    <label for="formGroupExampleInput">Nom de l'Article :</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nom" placeholder="Nom de l'Article">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Prix :</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="prix" placeholder="Prix en DH">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Catégorie :</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="categorie" placeholder="Informatique / Multimédia / Divers">
  </div>

  
  <div class="form-group" >
    <label for="">Image de l'article :</label>
    <input type="file" class="form-control-file" name="photo" >
  </div>

  <div class="form-group">
    <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
  </div>

</form>


@endsection