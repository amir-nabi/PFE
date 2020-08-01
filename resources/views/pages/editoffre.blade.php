@extends('layout.master')
@section('cssjs')
<style>
    .form-sec{background:#ccc; padding:15px;width: 800px;
    background: #f8f9fa;box-shadow: 0 0 4px #ccc;
        margin-right: auto;
        margin-left:auto;
        margin-top:-70px;
    }
    #startDate, #startTime {
    width: 40%;  
    float: left;
}
.row{
  padding: 10px;
}
    
</style>
@endsection

@section('contenu')

<div class="contain">
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops !<br></strong> Il y a eu quelques problèmes avec votre saisie.<br><br>
    </div>
@endif
<form action="/listeoffres" method="get">
    <button type="submit" class="btn btn-default"
         name="Submit" style="border:0.5px solid black;margin-top:20px;margin-left:100px;font-size:30px"><i class="fa fa-reply" aria-hidden="true"></i></button>
</form>

<div class="form-sec">
  <h2 style="margin-left:260px;margin-bottom:10px"><b>Modifier le service</b></h2>
 <form action="{{ route('listeoffres.update',$offre->id) }}" method="POST" enctype="multipart/form-data">
<div class="row">
@csrf
     @method('PATCH')
          <div class="col">
            <label><b>Titre :</b></label>
            <input type="text" class="form-control" value="{{ $offre->titre }}" name="titre" required="">
          </div>

          <div class="col">
            <label><b>Secteur :</b></label>
            <input type="text" class="form-control" value="{{ $offre->secteur }}" name="secteur" required="">
          </div>
        
          <div class="col">
            <label><b>Catégorie :</b></label>
            <select class="form-control" value="{{ $offre->categorie }}" name="categorie">
              <option>Embouteillage et conditionnement des liquides alimentaires</option>
              <option>Injection et transformation des matières plastiques</option>
              <option>Traitement et le transport des fluides</option>
            </select>
          </div>
        </div>
        
        
        <div class="form-group" style="margin-top:10px;margin-right:10px;margin-left:10px">
          <label><b>Description :</b></label>
          <textarea name="description" class="form-control" id="description" placeholder="Optionnel">{{$offre->description}}
          </textarea>
        </div>

        <div class="row">
          <div class="col">
            <label><b>Image :</b></label>
            <input type="file" class="form-control" name="image" >  
          </div>
          <div class="col">
                 <img class="preview-img" style="margin-left:140px" src="/uploads/images/{{$offre->image}}" width="75" height="75"/>
          </div>
        </div>
        
        <div class="row">
          <div class="col">
            <label><b>Prix :</b></label>
            <input type="number" pattern="0-9"class="form-control" value="{{ $offre->prix }}" name="prix" required="">
          </div>

          <div class="col">
            <label><b>Solde:</b></label>
            <input type="number" pattern="0-9" class="form-control" value="{{ $offre->solde }}" placeholder="Optionnel" name="solde">
          </div>
        </div>
        

        <div class="row">

        <!-- Date Picker -->
            <div class="col" id="startDate">
                <label for="date_debut"><b>Date d'annonce :</b></label>
                <input id="date_debut" type='date' value="{{ $offre->date_debut }}" class="form-control" name="date_debut"/>
            </div>

        <!-- Time Picker -->
            <div class="col" id="startTime">
                    <label for="date_fin"><b>Date d'expiration :</b></label>
                    <input id="date_fin" type='date' value="{{ $offre->date_fin }}" class="form-control" name="date_fin" />
            </div>
        </div>
        
        <div class="row" style="vertical-align:middle">
            <button type="submit" class="btn btn-default" style="border:2px solid black;width:120px;margin-right:auto;margin-left:auto">Enregistrer</button>
        </div>
  </form>
  </div>
</div>
@endsection