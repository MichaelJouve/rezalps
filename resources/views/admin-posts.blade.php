@extends('layouts.user')

@section('content')
    <h1 class="m-4"> Administration / Gestion des publications</h1>
    <div class="container-fluid">

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
                        {{--<button type="button" class="btn-secondary">
                            <a href="{{ URL::route('updateUsers', ['id' => $users->user->id]) }}">Modifier </a>
                        </button>--}}
                    </td>
                    <td>
                        <button type="button" class="btn-secondary">Supprimer</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$posts->links()}}

    </div>
@endsection




