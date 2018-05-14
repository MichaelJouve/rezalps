<!DOCTYPE html>
<html>
<head>
    <title>Connexion REZALPS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href={{URL::asset('css/app.css')}}>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="REZALPS reseau social dédié au metier de developpeur informatique">
    <meta>
</head>
<body class="body">

@yield('container-fluid')


<footer>
    <div class="footer text-center">
        <a class="footerlink" href="{{ URL::route('cgu') }}" TARGET=_BLANK title="CGU">CGU</a> -
        <a class="footerlink" href="{{ URL::route('legal-notice') }}" TARGET=_BLANK title="Mentions légales">Mentions légales</a> -
        <a class="footerlink" href="{{ URL::route('about-us') }}" TARGET=_BLANK title="About us">About Us</a>
        <p>&copy; EPIK S.A.S</p>
    </div>
</footer>

<script src="{{URL::asset('js/app.js')}}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>