@extends('layouts.user')


@section('content')
    @include('admin.dashboard.admin-nav')
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
                    <a href="{{ route('admin-comments-index', ['id'=>$comment->user->id]) }}">
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
                    {{--<a class="btn btn-secondary">--}}
                    {{--<a href="{{ URL::route('updateUsers-', ['id' => $users->user->id]) }}">Modifier </a>--}}
                    {{--</a>--}}
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




