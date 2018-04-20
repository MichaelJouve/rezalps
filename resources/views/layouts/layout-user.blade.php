<!DOCTYPE html>
<html>
<head>

    <title>App Name</title>
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
</head>
<body>
<header id="header">
    <div class="container-fluid">

        <div class=" row header-top">
            <div class="col">
                <img src="{{URL::asset('img/logo-texte-cote-web.png')}}" id="logo_header" class="rounded float-left" alt="logo-rezalps">
            </div>

            <div class="row header-top d-flex align-items-center" id="block_btn_droit">
                <img src="img/notif.png" alt="Notifications" height="30px">

                <a href="http://localhost/michael/rezalps_php_test/page_messagerie.php?id=1">
                    <img src="img/message.png" alt="Messages" height="40px">
                </a>

                <a href="page_flux.php"><img src="{{URL::asset('img/accueil.png')}}" alt="Accueil" height="30px"></a>
                <div class="btn-group dropleft dropdown">
                    <img class="img-contact" src="{{URL::asset('img/avatar1.jpg')}}" id="dropdownMenuButton" data-toggle="dropdown"
                         width="50" height="40" alt="photo-profil-michael">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="page_profil_publications.php">Profil</a>
                        <a class="dropdown-item" href="page_profil_parametres.php">Paramètres</a>
                        <a class="dropdown-item" href="{{'/'}}">Déconnection</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- contacts list -->
        <div class="row justify-centent-between" id="header_list_contact">
            <div class="col-lg-8 list">


            </div>
            <div class="col-lg-4">
                <form class="form-inline" id="search-barre" method="get" action="">
                    <input class="form-control " type="search" placeholder="Recherche" aria-label="Search" name="q">
                    <button class="btn btn-secondary" id="btn_search" type="submit">Rechercher</button>
                </form>
            </div>
        </div>


    </div>
</header>
@yield('sous-header')

<div class="container">
    @yield('content')

</div>


<footer>
    <p id="SAS" class="row justify-content-center">&copy; EPIK S.A.S</p>
</footer>

</body>
<script href="{{URL::asset('js/all.js')}}"></script>
</html>