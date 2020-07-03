@extends('layout.master')
@section('cssjs')
<style>
    h4{
        text-align: center;
    }
    .ratata:hover{
        color: goldenrod;
        border-color: goldenrod;
    }
    .col-lg-3 {
  position: relative;
  width: 50%;
}

.img-fluid {
  opacity: 1;
  display: block;
  transition: .5s ease;
  width:300px;
  height:350px;
    backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.col-lg-3:hover .img-fluid {
  opacity: 0.6;
}

.col-lg-3:hover .middle {
  opacity: 1;
}

.text {
  color: lightsteelblue;
  font-weight: bold;
  font-size: 100px;
  padding: 16px 32px;
}
</style>
@endsection
@section('contenu')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<hr>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
        <p>Message envoyé!</p> 
        <button style="margin-top:-25px" type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    </div>
    @endif
<section class="news py-5" id="news">
        <div class="container py-lg-5" style="margin-top: -70px;">
            <div class="d-flex view">
                <h3 class="heading mb-5">Liste des services</h3>
                <div class="ml-auto">
                    <a class="ratata" href="{{route('listeoffres1')}}" style="margin-right:40px;transition:0.4s">Voir tout</a>
                </div>
            </div>

            <div class="row news-grids" style="margin-top:10px;">
            
            @foreach($offres as $offre)
                <div class="col-lg-3 col-sm-6 newsgrid3 mt-lg-0 mt-4"style="margin-left:auto;margin-right:auto">
                <a class="ratatata" href="{{ route('listeoffres.show',$offre->id) }}">
                    <img src="/uploads/images/{{$offre->image}}" alt="Image du service" class="img-fluid">
                    <div class="middle"><div class="text">⌕</div></div>
                    <h4 style="margin-top:20px;">{{ $offre->titre }}</h4>
                </a>
                </div>          
            @endforeach
                </div>
            </div>
            <div style="margin-left:595px">{!! $offres->links() !!}</div>
    </section>
        
@endsection