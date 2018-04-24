@extends('layouts.general')

<header id="header_inscription">
    <div class="container">
        <div class="row">
            <div class="col text-center text-sm-left">
                <a href="{{route('index')}}"><img id="logo_header" src="img/logo-text-cote-web.png" alt="logo-rezalps"></a>
            </div>
        </div>
    </div>
</header>

@yield('content')
