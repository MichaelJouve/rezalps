<!DOCTYPE html>
<html>
<head>
    <title>Connexion REZALPS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href={{URL::asset('main.css')}}>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="REZALPS reseau social dédié au metier de developpeur informatique">
    <meta >
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body class="body">

<header id="header_inscription">
    <div class="container" >
        <div class="row">
            <div class="col text-center text-sm-left">
                <img id="logo_header" src="img/logo-text-cote-web.png"  alt="logo-rezalps">
            </div>
            <!-- DIV POUR MOBILE, REMPLACE LE SLIDER -->
            <div class="container" id="mobile_slider">
                <div class="row justify-content-center">
                    <img class="icon" id="reseau_metier" src="img/social_work.png" alt="social work icon">
                    <p class="col-7 text-center">Le 1er réseau pour les développeurs</p>
                </div>
                <div class="row justify-content-center">
                    <img class="icon" id="link_people" src="img/link.png" alt="create link with people">
                    <p class="col-7 text-center">Créateur de liens</p>
                </div>
                <div class="row justify-content-center">
                    <img class="icon" id="recrutement" src="img/recrutement.png" alt="recrutement">
                    <p class="col-7 text-center">Recrutez en ligne</p>
                </div>
            </div>
            <div class="container" id="connexion_mobile">
                <div class="row justify-content-center">
                    <form class="form_connexion" id="form_connexion" method="post" action="">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                        <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1">
                        <div class="row justify-content-center" id="connexion_bouton_mobile">
                            <a href="page_profil_publications.php"><button type="button" id="bouton_connexion_top" class="btn btn-secondary">Connexion</button></a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- FIN DIV POUR MOBILE -->
            <div class="row bouton_inscription d-none d-sm-block">
                <div class="input-group mb-3 header_accueil">
                    <form class="form_connexion" id="form_connexion" method="post" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                            <input type="password" class="form-control" placeholder="Mots de passe" aria-label="Username" aria-describedby="basic-addon1">
                            <a href="page_profil_publications.php"><button type="button" id="bouton_connexion_top" class="btn btn-secondary">Connexion</button></a>
                        </div>
                    </form>
                    <a href="#form1"><button type="button" class="btn btn-primary" id="bouton_inscription_top" >S'inscrire</button></a>
                </div>
            </div>
        </div>
    </div>

</header>

<section>
    @yield('container-fluid')
</section>