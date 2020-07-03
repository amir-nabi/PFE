@extends('layout.master')
@section('cssjs')
<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
</style>
@endsection

@section('contenu')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
<hr>
</div>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
            <button style="margin-top:-22px"type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
@endif

<div class="container">
    <div class="row">
    <div class="col-md-1">
<a href="{{ url()->previous() }}" >
    <button type="submit" class="btn btn-default"
     style="border:0.5px solid black;margin-top:20px;font-size:30px"><i class="fa fa-reply" aria-hidden="true"></i></button>
        </a>
    </div>
    <h3 class="heading mb-sm-5 mb-4 text-center" style="margin-left:280px;">Liste des services</h3>
    </div>
    <div class="row">
        <div  class="panel panel-primary filterable">
            <div class="panel-heading">

                <h3 class="panel-title"><i class="fa fa-bars" aria-hidden="true"></i> Services</h3>

            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                       <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Titre" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Secteur" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Prix" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Solde" disabled></th>
                        <th><input type="text" class="form-control" placeholder="" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offres as $offre)
                    <tr>
                        <td>{{ App\Offre::find($offre->offre_id)->id}}</td>
                        <td>{{ App\Offre::find($offre->offre_id)->titre}}</td>
                        <td>{{ App\Offre::find($offre->offre_id)->secteur}}</td>
                        <td>{{ App\Offre::find($offre->offre_id)->prix}} DT</td>
                        <td>{{ App\Offre::find($offre->offre_id)->solde}} DT</td>
                        <td>
                            <a class="btn btn-warning" title="Plus d'informations." style="width:40px" href="{{route('afficher_offre2',$offre->offre_id)}}"><i class="fa fa-info"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div style="text-align:center">{{ $offres->links() }}</div>

@endsection