@extends ('layouts.master')
@section ('content')

<section class="jumbotron text-center">
  <div class="container">
    <h1>Créer une note</h1>
    <hr>
  </div>
</section>

<form method="POST" action="/posts/create">  
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Nom de la note</label>
    <input type="text" class="form-control" id="title" placeholder="Titre" name="title">
  </div>
  
  <div class="form-group">
    <label for="body">Contenu de la note</label>
    <textarea id = "body" name="body" rows="10" class="form-control" 
              placeholder="Remplissez votre note"></textarea>
  </div>

  <div class="form-group">
	  <button type="submit" class="btn btn-primary my-2">Enregister</button>
    <a href="/board" class="btn btn-secondary my-2">Retour</a>
  </div>
  @include('layouts.errors')
</form>

@endsection