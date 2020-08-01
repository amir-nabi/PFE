@extends('admin.layout.master')
@section('cssjs')
<style>
  .col1{
    width:30%;
    text-align: left;
  }
  .col2{
    text-align:justify;
    width: 100px;
    overflow:hidden;
    word-wrap: break-word;
  }
  h8{
    margin-left:20px;
  }
</style>
@endsection
@section('contenu')
<div class="row">
<div class="col-md-1" style="margin-left:100px;">
<a href="{{ url()->previous() }}" >
    <button type="submit" class="btn btn-default"
     style="border:0.5px solid black;margin-top:20px;font-size:30px"><i class="fa fa-reply" aria-hidden="true"></i></button>
        </a>
    </div>
    </div>
    <div class="row" style="width:750px; border-color: black;border-style:solid dotted;border-width:6px 6px;margin-top:100px">
<div class="col-md-7">
<br>
  <table class="col-md-7" style="table-layout:fixed">
    <tr>
      <td class="col1"><b>Titre :</b></td>
      <td class="col2"><p>{{ ucfirst(trans($offre->titre)) }}</p></td>
    </tr>
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
      <td class="col2"><p>{{$offre->description}}</p></td>
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
  </div>
  <div class="col-md-5">
  <img style="margin-top:25px;margin-left:30px"src="/uploads/images/{{$offre->image}}" width=200px height=270px/>
  </div>
  @if(($offre->date_debut == NULL) && ($offre->date_fin == NULL))
  <h8>Date d'annonce: ?? / ?? / ???? | Date d'expiration: ?? / ?? / ????</h8>
@else
@if (($offre->date_debut) && ($offre->date_fin == NULL))
<h8>Date d'annonce: {{ $offre->date_debut }} | Date d'expiration: ?? / ?? / ????</h8>
@else
@if (($offre->date_debut == NULL) && ($offre->date_fin))
<h8>Date d'annonce: ?? / ?? / ???? | Date d'expiration: {{ $offre->date_fin }}</h8>
@else
  <h8 >Date d'annonce: {{ $offre->date_debut }} | Date d'expiration: {{ $offre->date_fin }}</h8>
@endif
@endif
@endif

    </div>
@endsection