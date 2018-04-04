@extends('layouts.layout-profil')

@section('content')
<main>


<div class="container">
    <section id="main-profil">
        <div class="row justify-centent-between">
            <div class="offset-1 col-2 mt-3 mb-3">
                <a href="parametres.blade.php#form_photo" class="form-entete" namebis="#form_photo">
                    <img id="photo_entete" src="img/michael-photo.jpg" width="160" height="160" alt="photo-profil-michael">
                </a>
            </div>
            <div class="col-6 mt-5">
                <a href="parametres.blade.php#form_name" class="form-entete lien_modif_params" namebis="#form_name">
                    <p class="text-center">Michaël JOUVE</p>
                </a>
            </div>
            <div class="col-3 mt-5">
                <a href="parametres.blade.php#form_city" class="form-entete lien_modif_params" namebis="#form_city">
                    <p>Valence</p>
                </a>
                <a href="parametres.blade.php#form_mail" class="form-entete lien_modif_params" namebis="#form_mail">
                    <p>jouvemichael@gmail.com</p>
                </a>
                <a href="parametres.blade.php#form_tel" class="form-entete lien_modif_params" namebis="#form_tel">
                    <p>06 07 08 09 01</p>
                </a>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="row">
            <div class=" row col-12">
                <div class="col-12">
                    <div class="reseau mb-3 mt-3" id="parametre">
                        <div class="card">
                            <div class ="card_parametre mb-3 mt-3">
                                <div class="row col-12 justify-centent-between">
                                    <div class="col-6" id="photo">
                                        <p class="text-center">Photo de Profil</p>
                                    </div>
                                    <div class="col-6">
                                        <a href="parametres.blade.php#form_photo" class="form-button alignement_droite lien_modif_params" id="change_photo" namebis="#form_photo">Modifier</a>
                                    </div>
                                    <div class="offset-3 col-6 offset-3">
                                        <form method="post" action="" name="photo" class="form_parametre" id="form_photo">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn">Photos</button>
                                                <input type="file" name="myfile" />
                                            </div>
                                            <div class="alignement_droite">
                                                <input type="submit" class="btn" value="Soumettre" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Nom Prénom :          JOUVE Michaël</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#form_name" class=" form-button alignement_droite lien_modif_params" namebis="#form_name">Modifier</a>
                                        </div>
                                        <div class="offset-3 col-6 offset-3">
                                            <form method="" action="" name="" class="form_parametre" id="form_name">
                                                <div class="input-group">
                                                    <label for="name1"></label>
                                                    <input type="name" class="form-control" aria-describedby="Votre nom" placeholder="Nom" name="name1" id="name1">
                                                    <label for="name2"></label>
                                                    <input type="name" class="form-control" aria-describedby="Votre prénom" placeholder="Prénom" name="name2" id="name2">
                                                    <button class="btn btn-secondary submit"  type="submit">Soumettre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Votre Ville :         Valence</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#form_city" class="form-button alignement_droite lien_modif_params" namebis="#form_city">Modifier</a>
                                        </div>
                                        <div class="offset-3 col-6 offset-3">
                                            <form method="" action="" name="" class="form_parametre" id="form_city">
                                                <div class="input-group">
                                                    <label for="ville"></label>
                                                    <input type="text" class="form-control" aria-describedby="Votre ville" placeholder="Nouvelle ville" name="Ville" id="ville">
                                                    <button class="btn btn-secondary"  type="submit">Soumettre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Votre date de naissance :</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#form_date" class="form-button alignement_droite lien_modif_params" namebis="#form_date">Modifier</a>
                                        </div>
                                        <div class="offset-3 col-6 offset-3">
                                            <form method="" action="" name="" class="form_parametre" id="form_date">
                                                <div class="input-group">
                                                    <label for="date"></label>
                                                    <input type="text" class="form-control" aria-describedby="Votre date de naissance" placeholder="jj/mm/aaaa" name="calendar" id="datepicker">
                                                    <button class="btn btn-secondary"  type="submit">Soumettre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Adresse email :         jouvemichaël@gmail.com</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#form_mail" class="form-button alignement_droite lien_modif_params" namebis="#form_mail">Modifier</a>
                                        </div>
                                        <div class="offset-3 col-6 offset-3">
                                            <form method="" action="" name="" class="form_parametre" id="form_mail">
                                                <div class="input-group">
                                                    <label for="mail"></label>
                                                    <input type="text" class="form-control" aria-describedby="Votre email" placeholder="Nouvelle adresse email" name="mail" id="mail">
                                                    <button class="btn btn-secondary"  type="submit">Soumettre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Numéro de Téléphone :      06 07 08 09 01</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#form_tel" class="form-button alignement_droite lien_modif_params" namebis="#form_tel">Modifier</a>
                                        </div>
                                        <div class="offset-3 col-6 offset-3">
                                            <form method="" action="" name="" class="form_parametre" id="form_tel">
                                                <div class="input-group">
                                                    <label for="tel"></label>
                                                    <input type="tel" class="form-control" aria-describedby="Votre numero" placeholder="Numero de téléphone" name="tel" id="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
                                                    <button class="btn btn-secondary"  type="submit">Soumettre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Mot de Passe :        **********</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#form_password" class="form-button alignement_droite lien_modif_params" namebis="#form_password">Modifier</a>
                                        </div>
                                        <div class="offset-3 col-6 offset-3">
                                            <form method="" action="" name="" class="form_parametre" id="form_password">
                                                <div class="input-group">
                                                    <label for="mdp"></label>
                                                    <input type="password" class="form-control" placeholder="Mot de passe" name="mp_connexion" id="mdp">
                                                    <label for="mdp2"></label>
                                                    <input type="password" class="form-control" placeholder="Confirmation" name="mp_connexion" id="mdp2">
                                                    <button class="btn btn-secondary"  type="submit">Soumettre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Visibilité de votre CV</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#form_cv" class="form-button alignement_droite lien_modif_params">Modifier</a>
                                        </div>
                                        <div class="offset-3 col-6 offset-3">
                                            <form method="" action="" name="" class="form_parametre" id="form_cv">
                                                <div class="d-flex justify-content-center">
                                                    <input  type="checkbox" name="pdf1" id="pdf1">
                                                    <p>CV visible uniquement pour les amis</p>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <input  type="checkbox" name="pdf2" id="pdf2">
                                                    <p>CV visible pour tout(e)s, amis et entreprises</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class ="card_parametre mb-3 mt-3">
                                    <div class="row col-12 justify-centent-between">
                                        <div class="col-6">
                                            <p class="text-center">Suppression de votre compte</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="parametres.blade.php#" class="alignement_droite" namebis="#>Modifier</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
@endsection