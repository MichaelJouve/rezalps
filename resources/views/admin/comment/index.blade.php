@extends('layouts.user')


@section('content')
    @include('admin.dashboard.admin-nav')
    <h1 class="m-4">Administration / Gestion des Commentaires</h1>
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
                        <a href="{{ route('admin-user-edit', ['id'=>$comment->id]) }}">
                            {{ $comment->user->name }}
                        </a>
                    </th>
                    <td>
                        <a href="{{ route('admin-post-edit', ['id'=>$comment->post_id]) }}">
                            {{ str_limit($comment->post->publication, $limit = 10, $end = '...') }}
                        </a>
                    </td>
                    <td>{{ $comment->created_at }}</td>
                    <td>
                        <a href="{{ route('admin-comment-edit', ['id'=>$comment->id]) }}">
                            {{ str_limit( $comment->content, $limit = 10, $end = '...') }}
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{ URL::route('admin-comment-edit', ['id'=>$comment->id]) }}">Modifier
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-secondary">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$posts->links()}}

    </div>
@endsection




