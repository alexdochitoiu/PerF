<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">
</head>
<body >

<!-- Header -->
<div class="container header container-custom">
    <div class="row">
        <div class="col-sm-4 col-xs-6" >
            <img class="logo" src="images/logo.png" alt="ímagine_logo"/>
        </div>
        <div class="col-sm-8 col-xs-6">
            <p class="in-block padding-top-right-20"><a href="#" class="signBtn">Inregistrare</a></p>
            <p class="in-block padding-top-right-20"><a href="#" class="signBtn">Autentificare</a></p>
        </div>
    </div>
</div>

@yield('content')

<!-- Footer
<div class="footer">


</div>
 -->
<!-- Scripts -->
<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
</body>
</html>
