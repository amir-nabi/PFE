@extends('admin.layout.master')
@section('cssjs')
@endsection
@section('contenu')
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!------ Include the above in your HEAD tag ---------->
<div class="container" style="margin-bottom: 100px;">
@php
 $url = url()->current();
 $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
@endphp

@if($route == 'afficher_fournisseur')
<h1 class="heading mb-sm-5 mb-4 text-center" style="margin-top:45px">⚡ LISTE DES FOURNISSEURS ⚡</h1>
@else
@if($route == 'afficher_utilisateur')
<h1 class="heading mb-sm-5 mb-4 text-center" style="margin-top:45px">⚡ LISTE DES UTILISATEURS ⚡</h1>
@else
<h1 class="heading mb-sm-5 mb-4 text-center" style="margin-top:45px">⚡ LISTE DES CLIENTS ⚡</h1>
@endif
@endif
<div class="row">
    <div style="margin-left:auto;margin-right:auto" class="span8">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Rôle</th>
          <th>État</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
        <tr>
          <td style="vertical-align: middle">{{$user->id}}</td>
          <td style="vertical-align: middle">{{$user->nom}}</td>
          <td style="vertical-align: middle">{{$user->prenom}}</td>
          <td style="vertical-align: middle">{{$user->role}}</td>
          @if (($user->etat) == 1)
                        <td style="vertical-align: middle">
                            <span style="font-weight:bolder; color:green">Libre</span></td>
                            @else
                            <td style="vertical-align: middle">
                            <span style="font-weight:bolder; color:#de2e21">Exclu</span></td>
                            @endif
          <td style="vertical-align: middle">{{$user->email}}</td>
          <td style="vertical-align: middle">
          @if (($user->role) == 'Client')
          <form action="#">
            <button title="Voir tout ses offres." type="submit" class="btn btn-info" style="opacity:0.6"><i class="fa fa-address-card"></i></button>
                                <a class="btn btn-success" title="Réintégrer" href="{{ route('activer_fournisseur',$user->id) }}"><i class="fa fa-check"></i></a>
                                <a class="btn btn-danger" title="Exclure" href="{{ route('desactiver_fournisseur',$user->id) }}"><i class="fa fa-ban"></i></a>
                                </form>
          @else
          <form action="{{route('offres_de_fournisseur',$user->id)}}" method="get">
                  <button title="Voir tout ses offres."type="submit" class="btn btn-info"><i class="fa fa-address-card"></i></button>
                                <a class="btn btn-success" title="Réintégrer" href="{{ route('activer_fournisseur',$user->id) }}"><i class="fa fa-check"></i></a>
                                <a class="btn btn-danger" title="Exclure" href="{{ route('desactiver_fournisseur',$user->id) }}"><i class="fa fa-ban"></i></a>
          </form>
          @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
<div style="margin-left:430px">{{ $users->links() }}</div>
</div>
@endsection