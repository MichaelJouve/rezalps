@extends('layouts.user')


@section('content')
    <h1 class="m-4"> Voir un post</h1>
    <div class="container-fluid">
        {{ $post['publication'] }}
    </div>
@endsection




