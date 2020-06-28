@extends('admin.layout.master')
@section('cssjs')
        <style>
        .card-counter{
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 160px;
            border-radius: 5px;
            transition: .3s linear all;
        }

        .card-counter:hover{
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
        }

        .card-counter.danger{
            background-color: #ef5350;
            color: #FFF;
        }  

        .card-counter.info{
            background-color: #26c6da;
            color: #FFF;
        }  

        .card-counter i{
            font-size: 8em;
            opacity: 0.6;
        }

        .card-counter .count-numbers{
            position: absolute;
            right: 35px;
            top: 20px;
            font-size: 32px;
            display: block;
        }

        .card-counter .count-name{
            position: absolute;
            right: 35px;
            top: 65px;
            font-style: italic;
            text-transform: capitalize;
            opacity: 0.8;
            display: block;
            font-size: 18px;
        }
        </style>
@endsection


@section('contenu')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<div class="container">
<h1 class="heading mb-sm-5 mb-4 text-center" style="margin-top: 10px;">Tableau de Bord</h1>
    <div class="row">
   
    <div class="col-md-6">
        <a href="{{route('affichelisteoffres')}}">
      <div class="card-counter info">
      <i class="fa fa-book"></i>
        <span class="count-numbers"><b>{{$offres}} offres</b></span>
        <span class="count-name">Liste des offres</span>
      </div>
    </a>
    </div>

    <div class="col-md-6">
        <a href="{{route('afficher_fournisseur')}}">
      <div class="card-counter danger">
      <i class="fa fa-users" aria-hidden="true"></i>
        <span class="count-numbers"><b>{{$users}} fournisseurs</b></span>
        <span class="count-name">Liste des fournisseurs</span>
      </div>
    </a>
    </div>

  </div>
</div>

@endsection