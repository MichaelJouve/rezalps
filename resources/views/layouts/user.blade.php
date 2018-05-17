@extends('layouts.general')

<header id="header">
    <div class="container-fluid">

        <div class=" row header-top">
            <div class="col">
                <img src="{{URL::asset('img/logo-texte-cote-web.png')}}" id="logo_header" class="rounded float-left"
                     alt="logo-rezalps">
            </div>

            <div class="row header-top d-flex align-items-center" id="block_btn_droit">
                <img src="{{asset('img/notif.png')}}" alt="Notifications" height="30px">

                <a href="{{ route('messaging') }}">
                    <img src="{{asset('img/message.png')}}" alt="Messages" height="40px">
                </a>

                <a href="{{ route('flux') }}"><img src="{{URL::asset('img/accueil.png')}}" alt="Accueil" height="30px"></a>
                <div class="btn-group dropleft dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <img class="img-fluid rounded-circle" src="{{ asset('storage/' . $authUser->avatar) }}"
                             id="dropdownMenuButton" data-toggle="dropdown"
                             width="50" height="40" alt="photo-profil-michael">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('publications') }}">Profil</a>
                        <a class="dropdown-item" href="{{ route('settings') }}">Paramètres</a>


                        <a href="{{route('logout')}}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="dropdown-item" title="Deconnexion">Deconnexion</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <!-- contacts list -->
        <div class="row justify-content-between" id="header_list_contact">
            <!-- display area of receiver's images of connected user -->
            <div class="col-lg-8 list">
                @include('shared.contactslist')
            </div>
            <div class="col-lg-4">
                <form class="form-inline" id="search-barre" method="get" action="">
                    <input class="form-control " type="search" placeholder="Recherche" aria-label="Search" name="q">
                    <button class="btn btn-secondary" id="btn_search" type="submit">Rechercher</button>
                </form>
            </div>
        </div>


</header>
@yield('sous-header')

<div class="container">
    @yield('content')

</div>

