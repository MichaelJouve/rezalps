@extends('layouts.user')


@section('content')
    <h1 class="m-4"> Administration / Gestion des commentaires</h1>
    <div class="container-fluid">

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">#user</th>
                <th scope="col">#post</th>
                <th scope="col">Création</th>
                <th scope="col">Publications</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>

            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>
                        {{ $comment->id }}
                    </td>
                    <th>
                        <a href="{{ route('updateUser', ['id'=>$comment->user->id]) }}">
                            {{ $comment->user->name }}
                        </a>
                    </th>
                    <td>
                        <a href="#">
                            {{ str_limit($comment->post->publication, $limit = 10, $end = '...') }}
                        </a>
                    </td>
                    <td>{{ $comment->created_at }}</td>
                    <td>{{ $comment->publication }}</td>
                    <td>
                        {{--<button type="button" class="btn-secondary">
                            <a href="{{ URL::route('updateUsers-', ['id' => $users->user->id]) }}">Modifier </a>
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




