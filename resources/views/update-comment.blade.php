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
                                    <img src="{{ asset('storage/' .$comment->user->avatar) }}" alt="..."
                                         class="rounded-circle postAvatar">
                                    <p>{{ $comment->user->name }}</p>
                                </div>
                                <h5 class="card-title">
                                    <form action="{{route('update-comment', ['id' => $comment->id])}}" method="POST">
                                        @csrf
                                        <input type="text" name="content" value="{{$comment->content}}">
                                        <div class="alignement_droite">
                                            <button type="submit" class="btn-secondary">Modifier</button>
                                        </div>
                                    </form>
                                </h5>

                                <small class="text-muted">
                                    <button class="button-like"></button>
                                    <button class="button-dislike"></button>
                                    Post publié le {{ $comment->created_at }}
                                </small>
                                <div class="card-footer text-muted">
                                </div>
                            </div>
                            <p></p>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection

