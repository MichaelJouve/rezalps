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
                                                                   id="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
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
                                                        <div class="form-group">
                                                            <label class="float-left" for="city">Poste actuel</label>
                                                            <input type="text" class="form-control"
                                                                   aria-describedby="Votre poste actuel"
                                                                   placeholder="Modifier le poste actuel" name="job" id="job"
                                                                   value="{{ $user->job }}">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-info submit" type="submit">
                                                        Soumettre
                                                    </button>
                                                </form>
                                                <form method="post" action="{{route('update-password')}}">
                                                    @csrf
                                                    <h3 class="card-title">Modifier mon mot de passe</h3>
                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label class="float-left" for="password"></label>
                                                        <input id="password" type="password"
                                                               aria-describedby="Mot de passe actuel"
                                                               placeholder="Mot de passe actuel" name="password" required>
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                                        <label class="float-left" for="new_password"></label>
                                                        <input id="new_password" type="password"
                                                               aria-describedby="Nouveau mot de passe"
                                                               placeholder="Nouveau mot de passe" name="new_password">
                                                        @if ($errors->has('new_password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('new_password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="float-left" for="password_confirm"></label>
                                                        <input id="password_confirm" type="password"
                                                               aria-describedby="Votre mot de passe"
                                                               placeholder="Confirmation" name="new_password_confirmation">
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