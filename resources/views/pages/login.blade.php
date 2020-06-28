@extends('layout.master')
@section('contenu')
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