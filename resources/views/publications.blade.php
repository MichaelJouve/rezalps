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
                @foreach($user->posts as $post)
                    <div class="card-deck">
                        <div class="card border-dark">   <!-- PUBLICATION 1 -->
                            <div class="card-body">
                               <div class="row">
                                <img src="{{asset('storage/' .$post->user->avatar)}}" alt="..."
                                     class="rounded-circle postAvatar">
                                <p>{{ $post->user->name }}</p>
                               </div>
                                <h5 class="card-title">{{ $post->publication }}</h5>

                                <small class="text-muted">
                                    <button class="button-like"></button>
                                    <button class="button-dislike"></button>
                                    Post publié le {{ $post->created_at }}
                                </small>
                                <div class="card-footer text-muted">
                                </div>

                                @foreach($post->comments as $comment)
                                    <div class="card-body">
                                        <p class="card-text">{{ $comment->content }}</p>
                                    </div>

                                    <small class="text-muted">
                                        <button class="button-like"></button>
                                        <button class="button-dislike"></button>
                                        Commentaire publié le {{ $post->created_at }}
                                    </small>
                                    <div class="card-footer">
                                    </div>
                                @endforeach


                                <form method="post" action="{{ route('add-comment') }}">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <textarea name="content" class="form-control" placeholder="Commenter ..."
                                              rows="1"></textarea>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-secondary" type="submit">Valider</button>
                                    </div>
                                </form>

                            </div>
                            <p></p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

