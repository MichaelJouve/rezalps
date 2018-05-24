@extends('layouts.user')


@section('content')
    <h1 class="m-4"> Dashboard</h1>
    <div class="container-fluid">

        <ul>
            <li>
                <a href="{{route('admin-user-index')}}">
                    Utilisateurs
                </a>
            </li>
            <li>
                <a href="{{route('admin-post-index')}}">
                    Posts
                </a>
            </li>
            <li>
                <a href="{{route('admin-comments-index')}}">
                    Commentaires
                </a>
            </li>
        </ul>
    </div>
@endsection




