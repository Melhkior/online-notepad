@extends ('layouts.master')
@section ('content')

<div class="col-sm-8">
	<br>
	<h1>Se Connecter</h1>
	<hr>
	<form method="POST" action="/login">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="email">Email</label>
			<br>
			<input type="text" class="form-control" id="email" name="email" required>
		</div>
		<div class="form-group">
			<label for="password">Mot de passe</label>
			<br>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Connexion</button>
			<a href="/home" class="btn btn-secondary my-2">Retour</a>
		</div>
		@include ('layouts.errors')
	</form>
</div>

@endsection