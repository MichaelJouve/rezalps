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
                <div class="row justify-centent-between">
                    <div class="offset-1 col-2 mt-3 mb-3">
                        <a href="#form_photo" class="form-button">
                            <img id="photo_entete" src="{{asset('img/avatar1.jpg')}}" width="160" height="160"
                                 alt="photo-profil-michael">
                        </a>
                    </div>
                    <div class="col-6 mt-5 text-center">
                        <p>{{$user->name}}</p>
                    </div>
                    <div class="col-3 mt-5 text-center">
                        <p>{{$user->city}}</p>
                        <p>{{$user->email}}</p>
                        <p>{{$user->phone_number}}</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
