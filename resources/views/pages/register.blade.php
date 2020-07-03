@extends('layout.master')
@section('cssjs')
<script>
function lettersOnly(input){
	var regex=/^[1-9]/gi;
	input.value = input.value.replace(regex,"");
}
</script>
@endsection
@section('contenu')
<div class="breadcrumb-agile mt-4">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{url('index')}}">Accueil</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page"> S'inscrire</li>
		</ol>
	</div>
</div>
<section class="login py-5">
	<div class="container">
		<h3 class="heading mb-sm-5 mb-4 text-center">Créer un compte</h3>
		
		<div class="login-form">
			<form action="{{route('postinscription')}}" method="post">
			@csrf
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Nom :</label>
					</div>
					<div class="col-md-8">
						<input type="text" name="nom" onkeyup="lettersOnly(this)" placeholder="Nom de famille" required="">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Prénom :</label>
					</div>
					<div class="col-md-8">
						<input type="text" name="prenom" onkeyup="lettersOnly(this)" placeholder="Prénom" required="">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Adresse e-mail :</label>
					</div>
					<div class="col-md-8">
						<input type="email" class="form-control" name="email" placeholder="exemple@gmail.com" required="">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Rôle :</label>
					</div>
					<div class="col-md-8">
					<select class="form-control" name="role" required="">
						<option value="Client">Client</option>
						<option value="Fournisseur">Fournisseur</option>
					</select>					
				</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Mot de passe :</label>
					</div>
					<div class="col-md-8">
						<input type="password" name="password" placeholder="Au moins 5 caractères!" minlength="5" required="" >
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-8 offset-md-4">
						<button type="submit" class="btn">S'enregistrer</button>
					</div>
				</div>
			</form>
		</div>
		
	</div>
</section>
@endsection