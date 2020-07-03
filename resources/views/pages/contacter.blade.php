@extends('layout.master')

@section('cssjs')
<style>
    p{
        color: #353333;
    }
ul#horizontal-list {
	list-style: none;
	padding-top: 30px;
	}
	ul#horizontal-list li {
		display: inline;
        padding:30px;
	}
    .btnn:hover {
        border-bottom: 1px solid goldenrod;
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
    <h3 class="heading mb-sm-5 mb-4 text-center" style="margin-top:30px">CONTACT</h3>
    </div>
</div>
        <div class="row" style=" margin-top:10px">
        <div class="col-md-1">
        </div>
            <div class="col-md-4" style="background-color: #ECECEC;border:#A9A6A6 0.5px solid;border-radius:2px;padding:20px;">
                <p><b style="color:teal">Adresse :</b><br>📍 Avenue Farhat Hached Sahline - Monastir 5012<br>
                <b style="color:teal">Téléphone :</b><br>📞 (+216) 25 722 208<br>
                <b style="color:teal">Email :</b><br>🌐 fluidesservicesindustrie@gmail.com<br>
                <b style="color:teal">Directeur Général :</b><br>👤 Selmi Hamza</p>
            </div>
            
            <div class="col-md-7" style="text-align:center;margin-top:40px">
                  <h2>Suivez Nous</h2>
                  <div id="menu-outer">
  <div class="table">
    <ul id="horizontal-list">
      <li><a href="https://www.facebook.com" target="_blank"><img class="btnn"src="facebook.png" title="Page Facebook" alt="Facebook logo" /></a></li>
      <li><a href="https://www.instagram.com" target="_blank"><img class="btnn" src="instagram.png" title="Compte Instagram" alt="Instagram logo" /></a></li>
      <li><a href="https://www.twitter.com" target="_blank"><img class="btnn" src="twitter.png" title="Compte Twitter" alt="Twitter logo" /></a></li>
      <li><a href="https://www.youtube.com" target="_blank"><img class="btnn" src="youtube.png" title="Chaîne Youtube" alt="Youtube logo" /></a></li>
    </ul>
  </div>
</div>
            </div>
        </div>

@endsection