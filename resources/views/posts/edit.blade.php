@extends('layouts.master')
@section('content')

@if ($post && $post->user_id == Auth::user()->id)

    <section class="jumbotron text-center">
      <div class="container">
        <h1>Editer une note</h1>
        <hr>
      </div>
    </section>

    <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Nom de la note</label>
            <input type="text" class="form-control" id="title" name="title" 
                   aria-describedby="title" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Contenu de la note</label>
            <textarea class="form-control" id="body" 
                      rows="10" name="body" required>{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editer la note</button>
        <a href="/board" class="btn btn-secondary my-2">Retour</a>
    </form>

@else

    <meta http-equiv="refresh" content="0; url=http://127.0.0.1:8000/board" />

@endif

@endsection