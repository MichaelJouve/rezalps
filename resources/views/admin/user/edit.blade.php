@extends('layouts.user')


@section('content')
    <h1 class="m-4"> Modifier un utilisateur</h1>
    <div class="container-fluid">

        <form action="{{URL::route('update-avatar')}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Mon Avatar</h3>
            </div>
            <div class="card-body text-center">
                <img class="img_contact" src="{{asset('storage/' .$user['avatar']) }}" width="40" height="40"
                     alt="{{ $user['name'] }}">
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
        <form method="post" action="{{route('admin-user-update', ['user'=>$user->id])}}" id="form">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Mes Infos Personnelles</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="float-left" for="name">Nom</label>
                    <input type="text" class="form-control"
                           aria-describedby="Votre nom" placeholder="Nom"
                           name="name" id="name" value="{{ $user['name'] }}">
                </div>
                <div class="form-group">
                    <label class="float-left" for="email">E-mail</label>
                    <input type="text" class="form-control"
                           aria-describedby="Votre email"
                           placeholder="Nouvelle adresse email" name="email"
                           id="email" value="{{ $user['email'] }}">
                </div>
                <div class="form-group">
                    <label class="float-left" for="phone_number">Numéro de
                        téléphone</label>
                    <input type="tel" class="form-control"
                           aria-describedby="Votre numero"
                           placeholder="Numero de téléphone" name="phone_number"
                           id="phone_number" value="{{ old('phone_number', $user['phone_number']) }}">
                </div>
                <div class="form-group">
                    <label class="float-left" for="birthdate">Date de
                        naissance</label>
                    <input type="date" class="form-control"
                           aria-describedby="Votre date de naissance"
                           placeholder="jj/mm/aaaa" name="birthdate"
                           id="datepicker" value="{{ $user['birthdate'] }}">
                </div>
                <div class="form-group">
                    <label class="float-left" for="city">Ville</label>
                    <input type="text" class="form-control"
                           aria-describedby="Votre ville"
                           placeholder="Nouvelle ville" name="city" id="city"
                           value="{{ $user['city'] }}">
                </div>
                <div class="form-group">
                    <label class="float-left" for="city">Site Web</label>
                    <input type="text" class="form-control"
                           aria-describedby="Votre site web"
                           placeholder="Modifier le site" name="website" id="website"
                           value="{{ $user['website'] }}">
                </div>
                <div class="form-group">
                    <label class="float-left" for="city">Poste actuel</label>
                    <input type="text" class="form-control"
                           aria-describedby="Votre poste actuel"
                           placeholder="Modifier le poste actuel" name="job" id="job"
                           value="{{ $user['job'] }}">
                </div>
            </div>
            <button class="btn btn-info submit" type="submit">
                Soumettre
            </button>
        </form>
    </div>
@endsection




