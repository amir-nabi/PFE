@extends('layout.master')
@section('cssjs')
<script>
    function lettersOnly(input){
	var regex=/^[1-9]/gi;
	input.value = input.value.replace(regex,"");
}
</script>
<style>


    
    .containe{
        padding:5%;
        margin-left: 150px;
        margin-top:-80px;
    }
    .containe .img{
        text-align:center;
    }
    .containe .details{
        border-left:3px solid #ded4da;
    }
    .containe .details p{
        font-size:15px;
        font-weight:bold;
}                       
/* Copy this code in your css file. */



.preview
{
    padding: 10px;
    position: relative;
}

.preview i
{
    color: white;
    font-size: 35px;
    transform: translate(50px,130px);
}

.preview-img
{
    margin-right:-150px;
    border-radius: 100%;
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
}

.browse-button
{
    width: 250px;
    height: 250px;
    border-radius: 100%;
    position: absolute; /* Tweak the position property if the element seems to be unfit */
    top: 0px;
    left: 215px;
    background: linear-gradient(180deg, transparent, black);
    opacity: 0;
    transition: 0.3s ease;
}

.browse-button:hover
{
    opacity: 1;
}

.browse-input
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    transform: translate(-1px,-26px);
    opacity: 0;
}

p{
  margin-left:30px;
  margin-top:30px;
}


.Error
{
    color: crimson;
    font-size: 13px;
}

.Back
{
    font-size: 25px;
}

</style>
@endsection


@section('contenu')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<form action="/profileinfo" method="get">
    <button type="submit" class="btn btn-default"
         name="Submit" style="border:0.5px solid black;margin-top:20px;margin-left:100px;font-size:30px"  > <i class="fa fa-reply" aria-hidden="true"></i></button>
</form>

<div class="containe">
  <div class="row">
    <div class="col-md-6 img" style="margin-left:-80px">
          <form enctype="multipart/form-data" action="/profileinfo" method="POST">
                <img class="preview-img" src="/uploads/pictures/{{ $user->picture }}" width="250" height="250"/>
                <div class="browse-button">
                    <i class="fa fa-pencil-alt"></i>
                    <input class="browse-input" type="file" name="picture" id="picture">
                    <h6 style="color:white;margin-top:0px">Mettre à jour<br><i class="fa fa-file-image-o" aria-hidden="true"></i></h6>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>
<input style="width:100px; margin-top:40px;margin-left:276px" class="btn btn-primary btn-block" type="submit" value="Modifier">
</form>
</div>
    <div class="col-md-6 details">
      <form action="{{route('postinfoedit')}}" method="POST">
          @csrf
      <div class="login-form" style="margin-left:35px">
                <div class="row">
                <h3 style="margin-left:140px;margin-top:-40px" class="heading mb-sm-5 mb-4 text-center">Améliorer vos info</h3>
                </div>
				<div class="row">
					<div class="col-md-4 text-md-right">
						<label>Nom</label>
					</div>
					<div class="col-md-8">
						<input style="width:300px" type="text" onkeyup="lettersOnly(this)" name="nom" value="{{ $user->nom }}">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Prénom</label>
					</div>
					<div class="col-md-8">
						<input style="width:300px" type="text" onkeyup="lettersOnly(this)" name="prenom" value="{{ $user->prenom }}" required="">
					</div>
                </div>
                <div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Adresse</label>
					</div>
					<div class="col-md-8">
                        @if ((Auth::user()->adresse)==null)
                            <input style="width:300px" type="text" name="adresse" placeholder="Avenue, Cité, Pays ...">
                        @else
                            <input style="width:300px" type="text" name="adresse" value="{{ $user->adresse }}">
                        @endif
					</div>
                </div>
                <div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Role</label>
					</div>
					<div class="col-md-8">
                        @if ((Auth::user()->role)==null)
                            <input style="width:300px" type="text" name="role" placeholder="Etudiant, Docteur, Ingénieur ...">
                        @else
                            <input style="width:300px" type="text" name="role" value="{{ $user->role }}">
                        @endif
					</div>
                </div>
                <div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Tél</label>
					</div>
					<div class="col-md-8">
                        @if ((Auth::user()->tel)==null)
                            <input style="width:300px" type="text" name="tel" placeholder="Numéro de téléphone">
                        @else
                            <input style="width:300px" type="text" name="tel" value="{{ $user->tel }}">
                        @endif
					</div>
                </div>
                <div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>Mobile</label>
					</div>
					<div class="col-md-8">
                    @if ((Auth::user()->mobile)==null)
                        <input style="width:300px" type="text" name="mobile" placeholder="Numéro Mobile">
                    @else
                        <input style="width:300px" type="text" name="mobile" value="{{ $user->mobile }}">
                    @endif
					</div>
                </div>
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>E-mail</label>
					</div>
					<div class="col-md-8">
						<input style="width:300px" type="email" name="email" value="{{ $user->email }}" required="">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4 text-md-right">
						<label>MDP</label>
					</div>
					<div class="col-md-8">
						<input style="width:300px" type="password" name="password" placeholder="Mot de passe" required="">
					</div>
                </div>

                <div class="row mt-3">
					<div class="col-md-8 offset-md-4">
						<button type="submit" class="btn">Enregistrer</button>
					</div>
				</div>
            </form>
    </div>
    </div>
  </div>
</div>
@endsection