@extends('layout.master')
@section('contenu')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="breadcrumb-agile mt-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('index')}}">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"> Se connecter</li>
            </ol>
        </div>
    </div>
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Whoops !<br></strong> Il y a eu quelques problèmes avec votre saisie. ( ˘︹˘ )
        <button style="margin-top:12px"type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    </div>
@endif

    <!-- login -->
    <section class="login py-5">
        <div class="container">
            <h3 class="heading mb-sm-5 mb-4 text-center">Bon retour !</h3>

            <div class="login-form">
                <form action="{{route('postconnexion')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 text-md-right">
                            <label>Adresse E-mail :</label>
                        </div>
                        <div class="col-md-8">
                            <input name="email" type="text" placeholder="E-mail" required="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 text-md-right">
                            <label>Mot de Passe :</label>
                        </div>
                        <div class="col-md-8">
                            <input name="password" type="password" placeholder="Mot de passe" required="" >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn">Suivant</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
    @endsection