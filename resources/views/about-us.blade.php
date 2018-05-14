@extends('layouts.static')

@section('content')
    <main>
        <section>
            <div class="col-10 offset-1 text-center">
                <br/><h1>Qui sommes nous?</h1><br/>
            </div>
        <div class="row">
            <div class="col-6 offset-3 text-center">
                <div>
                    <p>Epik SAS, créée en Janvier 2018 est une équipe du Campus Numérique In The Alps Valence</p>
                    <p>Notre Projet "Rezalps" est un réseau social nous servant de fil rouge tout au long de notre formation de Technicien Analyste Développeur</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-center">
                <img src="{{ asset('img/marie.png') }}">
                <h3>Marie</h3>
            </div>
            <div class="col-6 text-center">
                <img src="{{ asset('img/nicolas.png') }}">
                <h3>Nicolas</h3>
            </div>
        </div>

            <div class="row">
                <div class="col-6 text-center">
                    <img src="{{ asset('img/damiend.png') }}">
                    <h3>Damien</h3>
                </div>
                <div class="col-6 text-center">
                    <img src="{{ asset('img/michael.png') }}">
                    <h3>Michael</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-6 offset-3 text-center">
                    <p>Merci d'avoir visité notre site et à bientôt.</p>
                </div>

            </div>
        </section>
    </main>
@endsection