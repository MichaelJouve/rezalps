@extends('layouts.user')

@section('sous-header')
<main>
    <nav id="main-nav-profil"> <!-- Nav profil -->
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('publications') }}" title="Publications">Publications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('user.cv') }}" title="CV">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('medias') }}" title="Medias">Medias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('network') }}" title="Réseau">Réseau</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container"> <!-- Header profil -->
        <section id="main-profil">
            <div class="row justify-content-between align-items-center">
                <div class="offset-1 col-2 mt-3 mb-3">
                    <a>
                        <img class="img-fluid rounded-circle" id="avatar" src="{{asset('storage/' .$authUser->avatar)}}" width="160" height="160" alt="avatar">
                    </a>
                </div>
                <div class="col-6 mt-5">
                        <h2 class="text-center">{{$authUser->name}}</h2>
                    </div>
                    <div class="col-3 mt-5">
                        <p>{{$authUser->city}}</p>
                        <p>{{$authUser->email}}</p>
                        <p>{{$authUser->phone_number}}</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
