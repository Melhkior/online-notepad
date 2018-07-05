@extends ('layouts.master')

@section ('content')

<div class="col-sm-8">
	<br>
	<h1>S'enregistrer</h1>
	<hr>
	<form method="POST" action="/register">			
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nom d'utilisateur</label>
			<br>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>
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
			<label for="password_confirmation">Confirmation du Mot de passe</label>
			<br>
			<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">S'enregister</button>
			<a href="/home" class="btn btn-secondary my-2">Retour</a>
		</div>
		@include ('layouts.errors')
	</form>
</div>

@endsection