@extends('layout.master')
@section('cssjs')
<style>
    .containe{
        padding:5%;
        margin-left: 150px;
        margin-top:-80px;
    }
    .containe .img{
        text-align:center;
    }
    .containe .details{
        border-left:3px solid #ded4da;
    }
    .containe .details p{
        font-size:15px;
        font-weight:bold;
}                       
/* Copy this code in your css file. */



.preview
{
    padding: 10px;
    position: relative;
}

.preview i
{
    color: white;
    font-size: 35px;
    transform: translate(50px,130px);
}

.preview-img
{
    margin-right:-150px;
    border-radius: 100%;
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
}

.browse-button
{
    width: 250px;
    height: 250px;
    border-radius: 100%;
    position: absolute; /* Tweak the position property if the element seems to be unfit */
    top: 0px;
    left: 225px;
    background: linear-gradient(180deg, transparent, black);
    opacity: 0;
    transition: 0.8s ease;
}

.browse-button:hover
{
    opacity: 1;
}

.browse-input
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    transform: translate(-1px,-26px);
    opacity: 0;
}

p{
  font-family: "Georgia, serif";
}

.aaa{
    margin-top:20px;
}

.Error
{
    color: crimson;
    font-size: 13px;
}

.Back
{
    font-size: 25px;
}



</style>
@endsection


@section('contenu')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<form action="/profile" method="get">
    <button type="submit" class="btn btn-default"
         name="Submit" style="border:0.5px solid black;margin-top:20px;margin-left:100px;font-size:30px"  > <i class="fa fa-reply" aria-hidden="true"></i></button>
</form>

<div class="containe">
  <div class="row" style="margin-left:-60px">
    <div style="left:-80px" class="col-md-6 img">
          <form enctype="multipart/form-data" action="/profileinfo" method="POST">
          @if($user->picture)      
          <img class="preview-img" src="/uploads/pictures/{{ $user->picture }}" width="250" height="250"/>
               @else
               <img class="preview-img" src="/uploads/pictures/default.jpg" width="250" height="250"/>
               @endif
          <div class="browse-button">
                <input class="browse-input" type="file" name="picture" id="picture">
                    <h6 style="color:white;">Mettre à jour<br><i class="fa fa-file-image-o" aria-hidden="true"></i></h6>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <input style="width:100px; margin-top:38px;margin-left:285px" class="btn btn-primary btn-block" type="submit" value="Éditer"/>
          </form>
    </div>
    <div class="col-md-6 details" style="margin-top:20px;margin-right:-10px;text-align:center">
      <h3 style="font-family:'Impact';font-size:40px; margin-bottom:20px">{{ucfirst(trans(Auth::user()->prenom))}} {{ucfirst(trans(Auth::user()->nom))}}</h3>
        @if ((Auth::user()->adresse)==null)
        <p>Inconnu </p>
        @else
        <p>{{ucfirst(trans(Auth::user()->adresse))}}</p>
        @endif

      @if ((Auth::user()->role)==null)
        <p class="aaa">Inconnu</p> 
        @else
        <p class="aaa">{{ucfirst(trans(Auth::user()->role))}}</p>
        @endif

      @if ((Auth::user()->email)==null)
        <p>Inconnu</p> 
        @else
        <p>{{(Auth::user()->email)}}</p>
        @endif
        
        @if ((Auth::user()->tel)==null)
        <p>+216 ** *** ***</p> 
        @else
        <p>+216 {{(Auth::user()->tel)}}</p>
        @endif
      </p>
      <form action="/profileinfoedit" method="get">
              <button type="submit" class="btn btn-primary btn-block" name="Submit" style="width:100px;margin-top:32px;margin-left:218px" >Modifier</button>
      </form>
    </div>
  </div>
</div>
@endsection