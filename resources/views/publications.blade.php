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
                        @include('shared.postinput')
                        </div>
                    </div>
                </div>

                <!--   zones qui afficheront les données enregistrées des publications  -->
                @foreach($posts as $post)
                <div class="card-deck">
                    <div class="card">   <!-- PUBLICATION 1 -->
                        <div class="card-body">
                            <p class="card-text">{{ $post->publication }}</p>
                            <div class="card-footer text-muted">
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <button class="button-like"></button>
                                        <button class="button-dislike"></button>
                                        5 commentaires | Publié le {{ $post->created_at }}
                                    </small>
                                </div>


                                <div class="card-body">
                                    <p class="card-text">{{ $post->comment->content }}</p> //bonne syntaxe mais ne fonctionne pas lol
                                </div>


                                <form method="post"  action="{{ route('add-comment') }}">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <textarea name="content" class="form-control" placeholder="Commenter ..." rows="1"></textarea>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-secondary" type="submit">Valider</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

