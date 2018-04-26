@extends('layouts.user')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div id="new_publications" class="col-lg-10 col-md-8 col-sm-12">
                <div class="profil-publications col-lg-9 col-12"> <!-- Colonne flux publications -->
                    <!--  zone fixe pour faire une publication   -->
                    <div class="card-deck"> <!-- PUBLICATION 0 -->
                        <div class="card">
                            <div class="card-body">
                                @include('shared.postinput')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection