@extends('layout.master')
@section('cssjs')
<style>
    .fs{
        color: #1844a3;
    }
</style>
@endsection

@section('contenu')
<div class="container">
<hr>
</div>
<div class="row">
    <div class="col-md-1" style="margin-left:100px;">
<a href="{{ url()->previous() }}" >

    <button type="submit" class="btn btn-default"
     style="border:0.5px solid black;margin-top:20px;font-size:30px"><i class="fa fa-reply" aria-hidden="true"></i></button>
        </a>
    </div>
    <div class="col-md-9" style="text-align: center;margin-left:-55px;">
    <h3 class="heading mb-sm-5 mb-4 text-center" style="margin-top:30px">PRÉSENTATION</h3>
    </div>
</div>
<div class="row" style="border-left:1px solid grey;border-top:6px solid black;margin-top:20px;width:95%;margin-left:30px">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-4" style="margin-left:-25px;margin-top:40px">
        <img src="fsi.jpg">
    </div>
<div class="col-sm-7" style="margin-left:-15px;margin-top:30px">
<p>🔰 <b class="fs">FLUIDES SERVICES</b>,  entreprise  Tunisienne  créée  en  2011,  a capitalisé  un  savoir-faire reconnu dans le domaine de fluides et des services industriels, lui rehaussant au rang de société d’envergure-internationale.</p> 
<p>Avec nos partenaires, pionniers dans leurs domaines, nous offrons avec un engagement responsable et sans équivoque des <b class="fs">"PRODUITS & SERVICES"</b> destinés aux industries suivantes:</p>
 	<p> 🔸 L'injection et la transformation des matières plastiques</p>
 	<p> 🔸 L'embouteillage et le conditionnement des liquides alimentaires</p>
 	<p> 🔸 Le traitement et le transport des fluides</p>
</div>
</div>
@endsection