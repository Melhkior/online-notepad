@extends('layouts.master')
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Bienvenue sur Online Note-Pad</h1>          
        <p class="lead text-muted">
            @if (Auth::check())
                Vous êtes connecté en tant que {{ Auth::user()->name }}.
                Vous pouvez désormais rejoindre votre gestionnaire de note.
            @else
                Online Note-Pad est un bloc-notes virtuel.
                Il permet d'enregister des notes, de les éditer, etc.
            @endif
        </p>
        <p>  
            @if (Auth::check())
                <a href="/register" class="btn btn-secondary my-2">S'enregistrer</a>
                <a href="/board" class="mj_btn btn btn-warning">Vers le Gestionnaire</a>   
            @else
                <a href="/login" class="btn btn-primary my-2">Connexion</a>
                <a href="/register" class="btn btn-secondary my-2">S'enregistrer</a>
            @endif
        </p>
    </div>
</section>
 
@endsection
