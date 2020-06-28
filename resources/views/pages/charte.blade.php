@extends('layout.master')
@section('cssjs')
<style>
    p{
        margin-left:40px;
    }
    h4{
        font-weight: bold;
    }
</style>

@endsection

@section('contenu')
<br>
<p style="margin:auto;text-align:center;background-color:chartreuse;color:black">
⚡ En naviguant sur notre site, l’internaute reconnaît avoir pris connaissance et accepté nos conditions générales d’utilisation !!! ⚡
</p>
<br>
<form action="/profile" method="get">
<div class="row">
    <div class="col-md-1">
    <button type="submit" class="btn btn-default"
         name="Submit" style="border:0.5px solid black;margin-top:20px;margin-left:100px;font-size:30px"  > <i class="fa fa-reply" aria-hidden="true"></i></button>
    </div>
<div class="col-md-9" style="margin-left:100px;margin-top:15px;">
<h4>
❃ Données personnelles :
</h4>
<br>
<p>
⇝ Les données personnelles qui peuvent vous être demandées sont vos nom prénom et adresse mails.
Vous pouvez faire valoir vos droits de consultation, de rectification et de suppression en le contactant à l’adresse suivante [fluidesservicesindustrie@gmail.com].</p>
<p>Nous nous engageons à ne pas revendre ni donner ces informations qui ne sont pas conservées dès lors que vous demandez à ne plus recevoir notre newsletter.
</p>
<br>
<h4>❃ Propriété intellectuelle :
</h4>
<br>
<p>⇝ Le site web a été réalisé par Mohamed Amir Nabi.
</p>
<br>
<h4>❃ Photographies et contenu :
</h4>
<br>
<p>⇝ Les photographies, textes et illustrations publiés sur le site sont propriété de l'industrie ou ont fait l’objet de cession de droits.
Ils  ne peuvent faire l’objet d’aucune réutilisation.</p>
</div>
</div>
</form>
@endsection