@extends('layouts.layout-user')

@section('sous-header')
<main>
    <nav id="main-nav-profil"> <!-- Nav profil -->
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('publications') }}" title="Publications">Publications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('cv') }}" title="CV">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('medias') }}" title="Medias">Medias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('reseau') }}" title="Réseau">Réseau</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container"> <!-- Header profil -->
        <section id="main-profil">
            <div class="row justify-centent-between">
                <div class="offset-1 col-2 mt-3 mb-3">
                    <a href="#form_photo" class="form-button">
                        <img id="photo_entete" src="img/avatar1.jpg" width="160" height="160" alt="photo-profil-michael">
                    </a>
                </div>
                <div class="col-6 mt-5">
                    <a href="#form_name" class="form-button lien_modif_params">
                        <p class="text-center"></p>
                    </a>
                </div>
                <div class="col-3 mt-5">
                    <a href="#form_city" class="form-button lien_modif_params">
                        <p>Valence</p>
                    </a>
                    <a href="#form_mail" class="form-button lien_modif_params">
                        <p>jouvemichael@gmail.com</p>
                    </a>
                    <a href="#form_tel" class="form-button lien_modif_params">
                        <p>06 07 08 09 01</p>
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
