@extends('layouts.user')


@section('content')
    <h1 class="m-4"> Modifier un commentaire</h1>
    <div class="container-fluid">
        <form action="{{route('admin-comment-update', ['id'=>$comment->id])}}" method="POST">
            @csrf
            <input type="text" name="content" value="{{ $comment->content }}">
            <div class="alignement_droite">
                <button type="submit" class="btn-secondary">Mise à jour</button>
            </div>
        </form>
    </div>
@endsection




