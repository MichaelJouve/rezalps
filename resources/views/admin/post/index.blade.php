@extends('layouts.user')

@section('content')
    @include('admin.dashboard.admin-nav')
        <h1 class="m-4">Administration / Gestion des Publications</h1>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#user</th>
                <th scope="col">#post</th>
                <th scope="col">Création</th>
                <th scope="col">Publications</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>
                <th>{{ $post->user_id }}</th>
                <td>{{ $post->id }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->publication }}</td>
                <td>
                    <a class="btn btn-secondary" href="{{ URL::route('admin-post-edit', ['id'=>$post->id]) }}">Modifier
                    </a>
                </td>
                <td>
                    <button type="button" class="btn btn-secondary">Supprimer</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}

    </div>
@endsection




