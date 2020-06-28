@extends('admin.layout.master')
@section('contenu')
<div class="container" style="margin-bottom: 100px;">
<h1 class="heading mb-sm-5 mb-4 text-center" style="margin-top:45px">⚡ LISTE DES OFFRES ⚡</h1>
@php
 $url = url()->current();
 $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
@endphp

@if($route == 'affichelisteoffres1')
<h3 class="heading mb-sm-5 mb-4 text-center">🔸 Embouteillage et Conditionnement des Liquides Alimentaires 🔸</h3>
@else
       @if($route == 'affichelisteoffres2')
       <h3 class="heading mb-sm-5 mb-4 text-center">🔸 Injection et Transformation des Matières Plastiques 🔸</h3>
       @else
       @if($route == 'affichelisteoffres3')
       <h3 class="heading mb-sm-5 mb-4 text-center">🔸 Traitement et le Transport des Fluides 🔸</h3>
       @endif
       @endif
@endif

	<div class="row">
		<div style="margin-left:auto;margin-right:auto" class="span10">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Secteur</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Solde</th>  
                      <th>État</th>                  
                      <th>Date d'annonce</th>                                          
                      <th>Date d'expiration</th>                                                                                  
                      <th></th>                                                                                                            
                  </tr>
              </thead>   
              <tbody>
                  @foreach ($offres as $offre)
                <tr>
                    <td style="vertical-align: middle">{{$offre->id}}</td>
                    <td style="vertical-align: middle">{{$offre->titre}}</td>
                    <td style="vertical-align: middle">{{$offre->secteur}}</td>
                    <td style="vertical-align: middle">{{$offre->description}}</td>
                    <td style="vertical-align: middle">{{$offre->prix}}</td>
                    <td style="vertical-align: middle">{{$offre->solde}}</td>
                    @if (($offre->active) == 1)
                        <td style="vertical-align: middle">
                            <span style="font-weight:bolder; color:green">Activé</span></td>
                            @else
                            <td style="vertical-align: middle">
                            <span style="font-weight:bolder; color:#de2e21">Désactivé</span></td>
                            @endif
                    <td style="vertical-align: middle">{{$offre->date_debut}}</td>
                    <td style="vertical-align: middle">{{$offre->date_fin}}</td>
                    <td>
                            <form action="{{ route('afficher_offre',$offre->id) }}" method="get">
                                <button title="Plus d'informations."type="submit" class="btn btn-primary"><i class="fa fa-info"></i></button>
                                <a class="btn btn-success" title="Activer" href="{{ route('activer_offre',$offre->id) }}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-danger" title="Désactiver" href="{{ route('desactiver_offre',$offre->id) }}"><i class="fa fa-low-vision"></i></a>
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