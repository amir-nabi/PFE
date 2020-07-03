@extends('layout.master')
@section('cssjs')
<style>
    .row{
        padding: 10px;
        width: 100%;
    }
    .col-md-4{
        margin-left: auto;
        margin-right: auto;
    }
    #email{
      pointer-events: none;
    }
</style>
@endsection
@section('contenu')
<div class="container">
<hr>
</div>
<div class="row">
<div class="col-md-1">
<a style="margin-left:100px" href="{{ url()->previous() }}" >
    <button type="submit" class="btn btn-default"
     style="border:0.5px solid black;margin-top:20px;font-size:30px"><i class="fa fa-reply" aria-hidden="true"></i></button>
        </a>
    <h3 class="heading mb-sm-5 mb-4 text-center" style="margin-top:60px;margin-left:150px;text-align:center">Contacter le fournisseur</h3>
    </div>
<div class="container">
<form action="contact/store" method="post">
          <div class="row">
          <div class="col-md-4">
            <label><b>Email :</b></label>
            <input type="email" class="form-control" id="email" name="email" required="" value="{{ $f->email }}" >
            <input id="offre_id" name="offre_id" type="hidden" value="{{ $id_offre }}">
            <input id="client_id" name="client_id" type="hidden" value="{{Auth::user()->id}}">
          </div>
          </div>
          <div class="row">
          <div class="col-md-4">
            <label><b>Objet :</b></label>
            <input type="text" class="form-control" name="objet" required="">
          </div>
          </div>
          <div class="row">
          <div class="col-md-4">
          <label><b>Message :</b></label>
          <textarea rows="5" name="msg" class="form-control" required=""></textarea>
          </div>
          </div>
          @csrf
          <div class="row">
          <div class="col-md-4">
            <button type="submit" class="btn btn-default" style="background-color:#1844a3;color:white;font-weight:bolder;width:120px;margin-right:auto;margin-left:auto">Envoyer</button>
          </div>
        </div>
</form>
</div>
</div>
@endsection