@extends('layouts.user')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div id="new_publications" class="col-lg-10 col-md-8 col-sm-12">
                <div class="profil-publications col-lg-9 col-12"> <!-- Colonne flux publications -->
                    <!--  zone fixe pour faire une publication   -->
                    <div class="card-deck"> <!-- PUBLICATION 0 -->
                        <div class="card">
                            <div class="card-body">
                                @include('shared.postinput')
                            </div>
                        </div>
                    </div>
                </div>
                <!--   zones qui afficheront les données enregistrées des publications  -->
                @foreach($posts as $post)
                    <div class="card-deck">
                        <div class="card border-dark">   <!-- PUBLICATION 1 -->
                            <div class="card-body">
                                <div class="row">
                                    <a href="{{URL::route('user.publications', ['id' => $post->user->id])}}">
                                        <img src="{{ asset('storage/' .$post->user->avatar) }}" alt="..."
                                             class="rounded-circle postAvatar">
                                    </a>
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
                                        <div class="row">
                                            <a href="{{URL::route('user.publications', ['id' => $comment->user->id])}}">
                                                <img src="{{asset('storage/' .$comment->user->avatar)}}" alt="..."
                                                     class="rounded-circle commentAvatar">
                                            </a>
                                            <p>{{ $comment->user->name }}</p>
                                        </div>
                                        <p class="card-text">{{ $comment->content }}</p>
                                    </div>

                                    <small class="text-muted">
                                        <button class="button-like"></button>
                                        <button class="button-dislike"></button>
                                        Commentaire publié le {{ $comment->created_at }}
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