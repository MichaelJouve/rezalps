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
                                        <div class="row col-12 justify-centent-between">
                                            <div class="col-6" id="photo">
                                                <p class="text-center">Photo de Profil</p>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{ URL::route('settings') }}"
                                                   class="form-button alignement_droite lien_modif_params"
                                                   id="change_photo">Modifier</a>
                                            </div>
                                            <div class="offset-3 col-6 offset-3">
                                                <form method="post" action="{{route('update-setting')}}" id="form">
                                                    @csrf
                                                    <div class="upload-btn-wrapper">
                                                        <button class="btn">Photos</button>
                                                        <input type="file" name="myfile"/>
                                                    </div>
                                                    <div class="input-group">
                                                        <label for="name"></label>
                                                        <input type="text" class="form-control"
                                                               aria-describedby="Votre nom" placeholder="Nom"
                                                               name="name" id="name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <label for="email"></label>
                                                        <input type="text" class="form-control"
                                                               aria-describedby="Votre email"
                                                               placeholder="Nouvelle adresse email" name="email"
                                                               id="email" value="{{ $user->email }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <label for="phone_number"></label>
                                                        <input type="tel" class="form-control"
                                                               aria-describedby="Votre numero"
                                                               placeholder="Numero de téléphone" name="phone_number" id="phone_number" value="{{ $user->phone_number }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <label for="birthdate"></label>
                                                        <input type="text" class="form-control"
                                                               aria-describedby="Votre date de naissance"
                                                               placeholder="jj/mm/aaaa" name="calendar"
                                                               id="datepicker" value="{{ $user->birthdate }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <label for="city"></label>
                                                        <input type="text" class="form-control"
                                                               aria-describedby="Votre ville"
                                                               placeholder="Nouvelle ville" name="city" id="city" value="{{ $user->city }}">
                                                    </div>
                                                    <div class="input-group">
                                                        <label for="mdp"></label>
                                                        <input type="password" class="form-control"
                                                               placeholder="Mot de passe" name="mp_connexion"
                                                               id="mdp">
                                                    </div>
                                                    <button class="btn btn-secondary submit" type="submit">
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