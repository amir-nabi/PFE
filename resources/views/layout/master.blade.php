<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
@if(Auth::check())
    <title>{{ucfirst(trans(Auth::user()->prenom))}} {{ucfirst(trans(Auth::user()->nom))}} | Fluides & Services Industrie</title>
    @else
    <title>Fluides Services Industrie</title>
    @endif
    <link rel="icon" type="image/png" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
       
</script>
    
    <!-- css files -->
    <link href="{{asset('client/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- bootstrap css -->
    <link href="{{asset('client/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- custom css -->
    <link href="{{asset('client/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- fontawesome css -->
    <!-- //css files -->

    <link href="{{asset('client/css/css_slider.css')}}" type="text/css" rel="stylesheet" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //google fonts -->
    @yield('cssjs')

    

</head>

<body>
    <!-- //header -->
    <header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo">
                    <h1> <a href="{{url('index')}}"><img src="logo.png" style="width:80px;height:40px;">Fluides Services</a></h1>
                </div>
                <div class="search-form mx-md-auto">
                    <div class="n-right-w3ls">
                        <form action="{{ route('rechercher') }}" method="post" class="newsletter">
                            @csrf
                            <input class="search" type="text" name="cherche" placeholder="Rechercher" required="">
                            <button type="submit" class="form-control btn" value=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>
                <div class="forms mt-md-0 mt-2">
                @if(Auth::check())
                    <a href="{{url('profile')}}" class="btn"><span class="fa fa-user-circle-o"></span> {{ucfirst(trans(Auth::user()->prenom))}}</a>
                    <a href="{{url('deconnexion')}}" class="btn"><span class="fa fa-pencil-square-o"></span> Se déconnecter</a>
                    @else
                    <a href="{{url('inscription')}}" class="btn"><span class="fa fa-pencil-square-o"></span> S'inscrire</a>
                    <a href="{{url('connexion')}}" class="btn"><span class="fa fa-user-circle-o"></span> Connexion</a>
                    @endif
                </div>
            </div>
            <nav class="text-center">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu" style="margin-top: 15px;">
                    <li class="mr-lg-4 mr-2 active"><a href="{{url('index')}}">Accueil</a></li>
                    <li class="mr-lg-4 mr-2"><a href="{{url('presentation')}}">Présentation</a></li>
                    <li class="mr-lg-4 mr-2"><a href="{{url('contacter')}}">Contact</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>

    @yield('contenu')
    
    <footer class="footer py-5">
        <div class="container" style ="margin-top:50px;margin-bottom:-20px;">
            <div class="row" style="text-align:center">
                <div class="col">
                    <h7 class="nabi">Copyright 2020 <b>FLUIDES SERVICES</b> © Tunisie - Tous droits réservés</h7>
                </div>
            </div>
        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->

    <!-- copyright -->
   
    <a href="#home" class="move-top text-center"></a>
    <!-- //move top icon -->

</body>

</html>