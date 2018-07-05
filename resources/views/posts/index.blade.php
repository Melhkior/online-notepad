@extends ('layouts.master')
@section ('content')
	
<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bloc-Notes</h1>
      <p class="lead text-muted">
      Bienvenue 
        @if (Auth::check())
          {{ Auth::user()->name }}
        @endif 
      sur votre gestionnaire de note en ligne. Ici vous pouvez
      créer vos notes, les modifier et les supprimer à loisir.</p>
      <p>          
      <a href="/posts/create" class="btn btn-primary my-2">Créer une note</a>
      <a href="/logout" class="btn btn-secondary my-2">Déconnexion</a>
      <a href="/board/delete/{{ Auth::user()->id }}" 
         class="mj_btn btn btn-danger">Supprimer le compte</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
   <div class="container">
      <div class="row">

        @foreach ($posts as $post)
          @if ($post->user_id == Auth::user()->id)
            @include ('posts.post')
          @endif        
        @endforeach

      </div>
    </div> 
  </div>
</main>

@endsection
