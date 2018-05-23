@extends('layouts.user')


@section('content')
    <h1 class="m-4"> Dashboard</h1>
    <div class="container-fluid">

        <ul>
            <li>
                <a href="{{route('admin-user-index')}}">
                    Users
                </a>
            </li>
        </ul>
    </div>
@endsection




