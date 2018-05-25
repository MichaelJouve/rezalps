@extends('layouts.user')

@section('sous-header')
    <main>
        <nav id="main-nav-profil"> <!-- Nav profil -->
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            @if($user->id == Auth::user()->id)
                                <a class="nav-link" href="{{ URL::route('publications') }}"
                                   title="Publications">Publications</a>
                            @else
                                <a class="nav-link" href="{{ URL::route('user.publications', ['id'=> $user->id]) }}"
                                   title="Publications">Publications</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            {{--' '--}}
                            @if($user->id == Auth::user()->id)
                                <a class="nav-link" href="{{ URL::route('authUser.cv') }}" title="CV">CV</a>
                            @else
                                <a class="nav-link" href="{{ URL::route('user.cv', ['id'=> $user->id]) }}"
                                   title="CV">CV</a>
                            @endif
                        </li>
                        @if($user->id == Auth::user()->id)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::route('medias') }}" title="Medias">Medias</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            @if($user->id == Auth::user()->id)
                                <a class="nav-link" href="{{ URL::route('network') }}" title="Réseau">Réseau</a>
                            @else
                                <a class="nav-link" href="{{ URL::route('user.network', ['id'=> $user->id]) }}"
                                   title="Réseau">Réseau</a>
                            @endif
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
                            <img class="img-fluid rounded-circle" id="avatar" src="{{asset('storage/' .$user->avatar)}}"
                                 width="160" height="160" alt="avatar">
                            @if($user->id != Auth::user()->id)
                                @if($following)
                                    <form method="post" action="{{route('unfollow', ['id'=> $user->id] )}}">
                                        @csrf
                                        <input type="hidden" name="followed_id_invisible" value="{{$user->id}}">
                                        <input class="btn btn-outline-danger" type="submit" value="Ne plus suivre?">
                                    </form>
                                @else
                                    <form method="post" action="{{route('follow', ['id'=> $user->id])}}">
                                        @csrf
                                        <input type="hidden" name="followed_id_invisible" value="{{$user->id}}">
                                        <input class="btn btn-outline-success" type="submit" value="Suivre cette Personne?">
                                    </form>
                                @endif
                            @else
                            @endif
                        </a>

                    </div>
                    <div class="col-6 mt-5">
                        <h2 class="text-center">{{$user->name}}</h2>
                    </div>
                    <div class="col-3 mt-5">
                        <p>{{$user->city}}</p>
                        <p>{{$user->email}}</p>
                        <p>{{$user->phone_number}}</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
