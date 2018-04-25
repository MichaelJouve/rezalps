@extends('layouts.profil')

@section('content')
    <div class="container publications">  <!-- Composition de l'onglet publications de la page profil -->
        <div class="row">
            <div class="profil-informations col-lg-3 col-12"> <!-- Colonne "MES INFOS" -->
                <div class="card">
                    <h4 class="card-header"> MES INFOS</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Développeur</li>
                        <li class="list-group-item">
                            <a href="http://www.perdu.com" target="blank_">Mon site</a>
                        </li>
                        <li class="list-group-item">50 contacts</li>
                    </ul>
                </div>
            </div>
            <div class="profil-publications col-lg-9 col-12"> <!-- Colonne flux publications -->
                <!--  zone fixe pour faire une publication   -->
                <div class="card-deck"> <!-- PUBLICATION 0 -->
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('add-post')}}" method="POST">
                                @csrf
                                <input type="text" name="title">
                                <textarea name="publication" cols="100" rows="3" placeholder="Publier ..."></textarea>
                                <div class="upload-btn-wrapper">
                                    <button class="btn">Pièce jointe</button>
                                    <input type="file" name="myfile"/>
                                </div>
                                <div class="alignement_droite">
                                    <input type="submit" class="btn" value="Envoyer"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--   zones qui afficheront les données enregistrées des publications  -->
                @foreach($posts as $post)
                <div class="card-deck">
                    <div class="card">   <!-- PUBLICATION 1 -->
                        <img class="card-img-top" src="img/rezalps_img.png" alt="Logo Rezalps Application">+
                        <div class="card-body">
                            <p class="card-text">{{ $post->title }}</p>
                            <p class="card-text">{{ $post->publication }}</p>
                        </div>
                        @endforeach
                        <div class="card-footer">
                            <small class="text-muted">
                                <button class="button-like"></button>
                                <button class="button-dislike"></button>
                                5 commentaires | Publié il y a 5 minutes
                            </small>
                        </div>
                        <div class="card-deck">       <!-- PUBLICATION 2 -->
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">Cet après-midi, pitch de présentation de notre projet ! La
                                        vidéo n'est pas prête, j'ai encore des captures d'écrans à fournir, de
                                        l'animation à faire, et il est déjà 12h08....Aaaaaaaaah </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <button class="button-like"></button>
                                        <button class="button-dislike"></button>
                                        10 commentaires | Publié il y a 15 minutes
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

