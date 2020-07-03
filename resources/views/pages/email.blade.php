<html>
    <head>

    </head>
    <body>
        <h1>Fluides Services</h1>
        <h3>De :</h3>
        <p>{{ Auth::user()->email }}</p>
        <h3>Titre :</h3>
        <p>{{ $objet }}</p>
        <h3>Message :</h3>
        <p>{{ $msg }}</p>
    </body>
</html>