@extends('layouts.user')


@section('content')
    <h1 class="m-4"> Modifier un post</h1>
    <div class="card text-center col-6">
        <form method="post" action="{{route('admin-post-update', ['post'=>$post->id])}}" id="form">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label class="float-left" for="name">Post</label>
                    <input type="text" class="form-control"
                           aria-describedby=Publication name="publication" id="name" value="{{ $post['publication'] }}">
                </div>
            </div>
            <button class="btn btn-info submit" type="submit">
                Soumettre
            </button>
        </form>
    </div>
@endsection




