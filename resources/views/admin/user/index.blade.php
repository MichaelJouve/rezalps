@extends('layouts.user')


@section('content')
    @include('admin.dashboard.admin-nav')
    <h1 class="m-4"> Administration / Gestion des utilisateurs</h1>
    <div class="container-fluid">

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Ville</th>
                <th scope="col">Naissance</th>
                <th scope="col">Tel</th>
                <th scope="col">Création</th>
                <th scope="col">Site web</th>
                <th scope="col">Rôle</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>


            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td><img class="img_contact" src="{{asset('storage/' .$user->avatar) }}" width="40" height="40"
                             alt="{{ $user->name }}"></td>
                    <td><a href="{{ route ('admin-user-edit', ['id' => $user->id]) }}">
                            {{ $user->name }}
                        </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->birthdate }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->website }}</td>
                    <td>
                        @if ( $user->roles  === 2)
                            Admin
                            @elseif ( $user->roles === 1)
                            Super Admin
                            @else
                            Simple User
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{ URL::route('admin-user-edit', ['id' => $user->id]) }}">Modifier
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{ URL::route('admin-user-destroy', ['id' => $user->id]) }}">Supprimer</a>
                    </td>
                </tr>


            @endforeach
            </tbody>
        </table>
    </div>
@endsection




