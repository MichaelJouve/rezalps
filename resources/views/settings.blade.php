@extends('layouts.profil')
@section('content')
    <main>
        <div class="container">
            <div id="content">
                <div class="row">
                    <div class=" row col-12">
                        <div class="col-12">
                            <div class="reseau mb-3 mt-3" id="parametre">
                                <div class="card">
                                    <div class="card_parametre mb-3 mt-3">
                                        <div class="row col-12 justify-content-around">
                                            <div class="card text-center col-6">
                                                <form action="{{URL::route('update-avatar')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-header">
                                                        <h3 class="card-title">Mon Avatar</h3>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <img src="{{asset('storage/'.$user->avatar)}}"
                                                             alt="Mon avatar"
                                                             class="rounded border img-fluid">
                                                    </div>
                                                    <div class="text-center">
                                                        <input type="file" name="avatar" id="avatar">
                                                        <button class="btn btn-info" type="submit">
                                                            Modifier
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card text-center col-6">
                                                <form method="post" action="{{route('update-setting')}}" id="form">
                                                    @csrf
                                                    <div class="card-header">
                                                        <h3 class="card-title">Mes Infos Personnelles</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="float-left" for="name">Nom</label>
                                                            <input type="text" class="form-control"
                                                                   aria-describedby="Votre nom" placeholder="Nom"
                                                                   name="name" id="name" value="{{ $user->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="float-left" for="email">E-mail</label>
                                                            <input type="text" class="form-control"
                                                                   aria-describedby="Votre email"
                                                                   placeholder="Nouvelle adresse email" name="email"
                                                                   id="email" value="{{ $user->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="float-left" for="phone_number">Numéro de
                                                                téléphone</label>
                                                            <input type="tel" class="form-control"
                                                                   aria-describedby="Votre numero"
                                                                   placeholder="Numero de téléphone" name="phone_number"
                                                                   id="phone_number" value="{{ $user->phone_number }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="float-left" for="birthdate">Date de
                                                                naissance</label>
                                                            <input type="date" class="form-control"
                                                                   aria-describedby="Votre date de naissance"
                                                                   placeholder="jj/mm/aaaa" name="birthdate"
                                                                   id="datepicker" value="{{ $user->birthdate }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="float-left" for="city">Ville</label>
                                                            <input type="text" class="form-control"
                                                                   aria-describedby="Votre ville"
                                                                   placeholder="Nouvelle ville" name="city" id="city"
                                                                   value="{{ $user->city }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="float-left" for="city">Site Web</label>
                                                            <input type="text" class="form-control"
                                                                   aria-describedby="Votre site web"
                                                                   placeholder="Modifier le site" name="website" id="website"
                                                                   value="{{ $user->website }}">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-info submit" type="submit">
                                                        Soumettre
                                                    </button>
                                                </form>
                                                <form method="post" action="{{route('update-password')}}">
                                                    @csrf
                                                    <h3 class="card-title">Modifier mon mot de passe</h3>
                                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                                        <label class="float-left" for="current-password"></label>
                                                        <input id="current-password" type="password"
                                                               aria-describedby="Mot de passe actuel"
                                                               placeholder="Mot de passe actuel" name="current-password" required>
                                                        @if ($errors->has('current-password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('current-password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                                        <label class="float-left" for="new-password"></label>
                                                        <input id="new-password" type="password"
                                                               aria-describedby="Nouveau mot de passe"
                                                               placeholder="Nouveau mot de passe" name="new-password">
                                                        @if ($errors->has('new-password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('new-password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="float-left" for="password-confirm"></label>
                                                        <input id="password-confirm" type="password"
                                                               aria-describedby="Votre mot de passe"
                                                               placeholder="Confirmation" name="new-password_confirmation">
                                                    </div>
                                                    <button class="btn btn-info submit" type="submit">
                                                        Soumettre
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection