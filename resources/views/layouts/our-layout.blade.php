<!DOCTYPE html>
<html>

<head>
    <base href="http://localhost/rezalps_php/">
    <title>Publications REZALPS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="REZALPS reseau social dédié au metier de developpeur informatique">
    <meta>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>
<header id="header">
    <div class="container-fluid">

        <div class=" row header-top">
            <div class="col">
                <img src="{{ URL::asset('img/logo-texte-cote-web.png') }}" id="logo_header" class="rounded float-left" alt="logo-rezalps">
            </div>

            <div class="col header-top" id="block_btn_droit">
                <img src="{{ URL::asset('img/notif.png') }}" alt="Notifications" height="30px">
                <img src="{{ URL::asset('img/message.png') }}" alt="Messages" height="40px">
                <a href="page_flux.php"><img src="{{ URL::asset('img/accueil.png') }}" alt="Accueil" height="30px"></a>
                <a href="page_profil_publications.php"><img class="img-contact" src="{{ URL::asset('img/michael-photo.jpg') }}" width="50"
                                                            height="40" alt="photo-profil-michael"></a>
            </div>
        </div>


        <!-- contacts list -->
        <div class="row justify-centent-between" id="header_list_contact">
            <div class="col-lg-8 list">

                <a href="page_profil_template.php?id=1">
                    <img class="img-contact" src="img/nico.jpeg" width="30" height="30" alt="photo-profil-nico">
                </a>
                <a href="page_profil_template.php?id=2">
                    <img class="img-contact" src="img/laura.jpeg" width="30" height="30" alt="photo-profil-laura">
                </a>
                <a href="page_profil_template.php?id=3">
                    <img class="img-contact" src="img/vincent.jpeg" width="30" height="30" alt="photo-profil-vincent">
                </a>
                <a href="page_profil_template.php?id=4"><img class="img-contact" src="img/marie.jpg" width="30"
                                                             height="30" alt="photo-profil-marie"></a>
                <a href="page_profil_template.php?id=5"><img class="img-contact" src="img/fabrice.jpeg" width="30"
                                                             height="30" alt="photo-profil-fabrice"></a>
                <a href="page_profil_template.php?id=6"><img class="img-contact" src="img/damienT.jpeg" width="30"
                                                             height="30" alt="photo-profil-damienT"></a>
                <a href="page_profil_template.php?id=7"><img class="img-contact" src="img/anzor.jpeg" width="30"
                                                             height="30" alt="photo-profil-anzor"></a>
                <a href="page_profil_template.php?id=8"><img class="img-contact" src="img/romaric.jpeg" width="30"
                                                             height="30" alt="photo-profil-romaric"></a>

            </div>
            <div class="col-lg-4">
                <form class="form-inline" id="search-barre" method="get" action="rezalps-q.php">
                    <input class="form-control " type="search" placeholder="Recherche" aria-label="Search" name="q">
                    <button class="btn btn-secondary" id="btn_search" type="submit">Recherche</button>
                </form>
            </div>
        </div>
    </div>
</header>
@yield('publier')
@yield('historique-publications')

