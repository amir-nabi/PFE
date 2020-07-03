@extends('layout.master')
@section('cssjs')
<style>
  tr, td{
    padding: 15px;
  }
  table{
    width: 100%;
    margin-left: auto;
    margin-right:auto;
  }
  .col1{
    width:40%;
    text-align: right;
  }
  .col2{
    text-align: left;
    width: 60%;
  }
</style>
@endsection

@section('contenu')
<div class="col-md-1" style="margin-left:100px;">
<a href="{{ url()->previous() }}" >
    <button type="submit" class="btn btn-default"
     style="border:0.5px solid black;margin-top:20px;font-size:30px"><i class="fa fa-reply" aria-hidden="true"></i></button>
        </a>
    </div>
<div class="col-md-8" style="margin-left:auto;margin-right:auto;text-align:center; border-color: black;border-style:solid dotted;border-width:6px 6px;margin-top:10px">
<h2 style="margin-top:20px;">⭐ {{ ucfirst(trans($offre->titre)) }} ⭐</h2>
<br>
          <img class="img-fluid" src="/uploads/images/{{$offre->image}}" width="350" height="250"/>
<br>
@if(Auth::check())
<a href="{{route('contact',[$offre->user_id,$offre->id])}}">☛ Contacter fournisseur ☚</a>
@else
<a href="#" style="cursor: not-allowed;" title="Vous devez vous authentifier!">☛ Contacter fournisseur ☚</a>
@endif
<br>
  <table>
    <tr>
      <td class="col1"><b>Secteur :</b></td>
      <td class="col2"><p>{{$offre->secteur}}</p></td>
    </tr>
    <tr>
      <td class="col1"><b>Catégorie :</b></td>
      <td class="col2"><p>{{$offre->categorie}}</p></td>
    </tr>
    <tr>
      <td class="col1"><b>Description :</b></td>
      @if(($offre->description))
      <td class="col2"><p>{{$offre->description}}</p></td>
      @else
      <td class="col2"><p>Pas d'informations.</p></td>
      @endif
    </tr>
    <tr>
      <td class="col1"><b>Prix :</b></td>
      <td class="col2"><p>{{$offre->prix}} DT</p></td>
    </tr>
    <tr>
      <td class="col1"><b>Solde :</b></td>
      @if(($offre->solde)==0) 
      <td class="col2"><p>⌀</p></td>    
      @else
      <td class="col2"><p>{{$offre->solde}} DT</p></td>
      @endif
    </tr>
  </table>
@if(($offre->date_debut == NULL) && ($offre->date_fin == NULL))
  <h8>Date d'annonce: ?? / ?? / ???? | Date d'expiration: ?? / ?? / ????</h8>
@else
@if (($offre->date_debut) && ($offre->date_fin == NULL))
<h8>Date d'annonce: {{ $offre->date_debut }} | Date d'expiration: ?? / ?? / ????</h8>
@else
@if (($offre->date_debut == NULL) && ($offre->date_fin))
<h8>Date d'annonce: ?? / ?? / ???? | Date d'expiration: {{ $offre->date_fin }}</h8>
@else
  <h8>Date d'annonce: {{ $offre->date_debut }} | Date d'expiration: {{ $offre->date_fin }}</h8>
@endif
@endif
@endif
</div>
@endsection