<!DOCTYPE html>
<html>
<head>
    <title>Connexion REZALPS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="REZALPS reseau social dédié au metier de developpeur informatique">
    <meta>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body class="body">

<header id="header_inscription">
    <div class="container">
        <div class="row">
            <div class="col text-center text-sm-left">
                <img id="logo_header" src="img/logo-text-cote-web.png" alt="logo-rezalps">
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
                    <form class="form_connexion" id="form_connexion" method="post" action="{{ route('login') }}">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                                <div class="row justify-content-center" id="connexion_bouton_mobile">
                                    <a href="{{ route('login') }}" id="bouton_connexion_top"
                                            class="btn btn-secondary">{{ __('failed') }}</a>
                                </div>
                    </form>
                </div>
            </div>
            <!-- FIN DIV POUR MOBILE -->
            <div class="row bouton_inscription d-none d-sm-block">
                <div class="input-group mb-3 header_accueil">
                    <form class="form_connexion" id="form_connexion" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   placeholder="Mot de passe" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <a href="{{ route('login') }}" id="bouton_connexion_top"
                               class="btn btn-secondary">Connexion</a>

                        </div>
                    </form>
                    <a href="{{ route('register') }}">
                        <button type="button" class="btn btn-primary"
                                id="bouton_inscription_top">{{ __('Inscription') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</header>

<section>
    <div class="container-fluid">

        <div class="row d-none d-md-block d-lg-block">
            <div class="col-12 fullsize">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner" id="slide">

                        <div class="carousel-item active" id="carousel_img0">
                            <div class="col-xl-3 col-lg-5 col-md-11 text">
                                <h5>Le 1er réseau social "Métier"</h5>
                                <p>Rezalps est le premier réseau social centré autour du métier de développeur
                                    informatique.Que vous soyez novice, développeur aguéri ou une entreprise, venez
                                    profiter de l’expertise de la communauté afin d’échanger autour d’une passion
                                    commune ! </p>
                            </div>
                        </div>
                        <div class="carousel-item" id="carousel_img1">
                            <div class="col-xl-3 col-lg-5 col-md-11 text">
                                <h5>Créateur de liens</h5>
                                <p>Likez, commentez et partagez l'actualité de vos contacts et agrandissez votre réseau
                                    en ayant des interactions avec d'autres personnes. Une question ? Un problème ?Une
                                    découverte à partager? Une chose à faire... Pensez Rezalps! </p>
                            </div>
                        </div>
                        <div class="carousel-item" id="carousel_img2">
                            <div class="col-xl-3 col-lg-5 col-md-11 text">
                                <h5>Objectif : recrutement</h5>
                                <p>La demande dans le secteur du développement étant forte, Rezalps se veut être une
                                    solution pour vous mettre en contact avec la personne qui conviendra parfaitement à
                                    ce que vous cherchez. Partagez vos offres d’emplois et explorez les profils des
                                    différents candidats en quelques clics !</p>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Connexion') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-sm-4 col-form-label text-md-right">{{ __('Adresse E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Se souvenir de moi') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Connexion') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>


<footer>
    <p id="SAS" class="row justify-content-center">&copy; EPIK S.A.S</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script src="js/all.js"></script>

</body>
</html>