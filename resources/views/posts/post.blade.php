<div class="col-md-4">
  <div class="card mb-4 box-shadow">
    <div class="card-body">      
      <h2 class="card-title">{{ $post->title }}</h2>
      <p class="card-text">{{ $post->body }}</p>         
      <p class="blockquote-footer"> 
        Créée le
        {{ $post->created_at->toFormattedDateString() }}
        &emsp;
        Editée le 
        {{ $post->updated_at->toFormattedDateString() }}
      </p>
      <hr>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="/posts/edit/{{ $post->id }}" class="btn btn-sm btn-outline-secondary">Modifier</a>
          <a href="/posts/delete/{{ $post->id }}" class="btn btn-sm btn-outline-secondary">Supprimer</a>
        </div>
      </div>
    </div>
  </div>
</div>