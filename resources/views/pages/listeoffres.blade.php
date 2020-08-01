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
                    @if (($offre->user_id) == (Auth::user()->id))
                    <tr>
                        <td>{{ $offre->id }}</td>
                        <td>{{ $offre->titre }}</td>
                        <td>{{ $offre->secteur }}</td>
                        <td>{{ $offre->prix }} DT</td>
                        @if(($offre->solde)==0) 
                        <td>⌀</td>
                        @else
                        <td>{{ $offre->solde }} DT</td>
                        @endif
                        <td>
                            <form action="{{ route('listeoffres.destroy',$offre->id) }}" method="POST">
                                <a class="btn btn-primary" title="Plus d'informations." style="width:35px" href="{{ route('listeoffres.show',$offre->id) }}"><i class="fa fa-info"></i></a>
                                <a class="btn btn-warning" title="Éditer"style="width:35px" href="{{ route('listeoffres.edit',$offre->id) }}"><i class="fa fa-pencil"></i></a>
                                @csrf
                                @method('DELETE')
                                <button style="width:35px" title="Supprimer"type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                            @endif
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