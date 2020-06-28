@extends('admin.layout.master')
@section('cssjs')
<style>
.w3-button {width:70px;
}
</style>
@endsection
@section('contenu')
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!------ Include the above in your HEAD tag ---------->
<div class="container" style="margin-bottom: 100px;">
<h1 class="heading mb-sm-5 mb-4 text-center" style="margin-top:45px">⚡ LISTE DES FOURNISSEURS ⚡</h1>
<div class="row">
    <div style="margin-left:auto;margin-right:auto" class="span8">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Email</th>
          <th>Tél</th>
          <th>Rôle</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
        <tr>
          <td style="vertical-align: middle">{{$user->id}}</td>
          <td style="vertical-align: middle">{{$user->nom}}</td>
          <td style="vertical-align: middle">{{$user->prenom}}</td>
          <td style="vertical-align: middle">{{$user->email}}</td>
          <td style="vertical-align: middle">{{$user->tel}}</td>
          <td style="vertical-align: middle">{{$user->role}}</td>
          <td style="vertical-align: middle">
          <form action="{{route('offres_de_fournisseur',$user->id)}}" method="get">
          <p><button type="submit" title="Voir tout ses offres." class="w3-button w3-border w3-hover-brown"><i class="fa fa-address-card"></i></button></p>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
</div>
@endsection