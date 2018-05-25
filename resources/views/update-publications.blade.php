@extends('layouts.profil')

@section('content')
    <div class="container publications">  <!-- Composition de l'onglet publications de la page profil -->
        <div class="row">
            <div class="profil-informations col-lg-3 col-12"> <!-- Colonne "MES INFOS" -->
                <div class="card">
                    <h4 class="card-header"> MES INFOS</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $user->job }}</li>
                        <li class="list-group-item">
                            <a href="{{ $user->website }}" target="blank_">{{ $user->website }}</a>
                        </li>
                        <li class="list-group-item">50 contacts</li>
                    </ul>
                </div>
            </div>
                <!--   zones qui afficheront les données enregistrées des publications  -->
                    <div class="card-deck">
                        <div class="card border-dark">   <!-- PUBLICATION 1 -->
                            <div class="card-body">
                                <div class="row">
                                    <img src="{{ asset('storage/' .$post->user->avatar) }}" alt="..."
                                         class="rounded-circle postAvatar">
                                    <p>{{ $post->user->name }}</p>
                                </div>
                                <h5 class="card-title">
                                    <form action="{{ route('update-post', ['post' => $post->id]) }}" method="POST">
                                        @csrf
                                        <input type="text" name="publication" value="{{$post->publication}}">
                                        <div class="alignement_droite">
                                            <button type="submit" class="btn-secondary">Modifier</button>
                                        </div>
                                    </form>
                                </h5>

                                <small class="text-muted">
                                    <button class="button-like"></button>
                                    <button class="button-dislike"></button>
                                    Post publié le {{ $post->created_at }}
                                </small>
                                <div class="card-footer text-muted">
                                </div>

                            {{--contrôle de l'utilisateur, si c'est celui connecté alors on affiche le bouton delete--}}
                            @if (Auth::id() == $post->user_id)
                                    @include('shared.deleteinput')
                                @endif

                                @foreach($post->comments as $comment)
                                    <div class="card-body">
                                        <div class="row">
                                            <img src="{{asset('storage/' .$post->user->avatar)}}" alt="..."
                                                 class="rounded-circle commentAvatar">
                                            <p>{{ $post->user->name }}</p>
                                        </div>
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

                            </div>
                            <p></p>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection

