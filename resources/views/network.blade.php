@extends('layouts.profil')

@section('content')

    <main>
        <section id="content" class="container">
            <div class="row">
                <div class=" row col-12">
                    {{--Start area Suggestions--}}
                    <div class="col-md-3 col-sm-12">
                        <div class="reseau" id="suggestions">
                            <h2 class="text-center">Suggestions</h2>
                            <div class="card">
                                <div class ="card" id="profsug">
                                    <div class="row col-12">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                            </a>
                                        </div>
                                        <div class="col-8">
                                            <p class="text-center">Informations sur le contact</p>
                                        </div>
                                    </div>
                                    <div class="row col-12 d-flex justify-content-center">
                                        <p class="">12 amis communs</p>
                                    </div>
                                </div>
                                <div id="profsug">
                                    <div class="row col-12">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                            </a>
                                        </div>
                                        <div class="col-8">
                                            <p class="text-center">Informations sur le contact</p>
                                        </div>
                                    </div>
                                    <div class="row col-12 d-flex justify-content-center">
                                        <p class="">9 amis communs</p>
                                    </div>
                                </div>
                                <div id="profsug">
                                    <div class="row col-12">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                            </a>
                                        </div>
                                        <div class="col-8">
                                            <p class="text-center">Informations sur le contact</p>
                                        </div>
                                    </div>
                                    <div class="row col-12 d-flex justify-content-center">
                                        <p class="">6 amis communs</p>
                                    </div>
                                </div>
                                <div id="profsug">
                                    <div class="row col-12">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                            </a>
                                        </div>
                                        <div class="col-8">
                                            <p class="text-center">Informations sur le contact</p>
                                        </div>
                                    </div>
                                    <div class="row col-12 d-flex justify-content-center">
                                        <p class="">3 amis communs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--End area Suggestions--}}

                    {{--Start area friends--}}
                    <div class="col-md-6 col-sm-12">
                        <div class="reseau" id="amis">
                            <h2 class="text-center">Amis</h2>
                            <div class="card">
                                <div id="profamis">
                                    <div class="row col-12">
                                       @foreach($friends as $friend)
                                        <div class="col-3">
                                            <a href="{{ asset('storage/' .$friend->user->avatar)}}">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                        @endforeach
                                        <div class="col-3">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="profamis">
                                    <div class="row col-12">
                                        <div class="col-3">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#">
                                                <img class="img_contact" src="img/michael-photo.jpg" width="30" height="30" alt="photo-profil-michael">
                                                <p>Nom</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--End Area friends--}}

                    {{--Start area Entreprises followed--}}
                    <div class="col-md-3 col-sm-12">
                        <div class="reseau" id="entreprises">
                            <h2 class="text-center">Entreprises</h2>
                            <div class="align-items-center" id="profent">
                                <a href="#">
                                    <img class="img_entreprise" src="img/frenchtech_v2.png" width="245" height="90" alt="frenchtech_v2.png">
                                </a>
                            </div>
                            <div class="align-items-center" id="profent">
                                <a href="#">
                                    <img class="img_entreprise" src="img/teamto.png" width="245" height="90" alt="teamto.png">
                                </a>
                            </div>
                            <div class="align-items-center" id="profent">
                                <a href="#">
                                    <img class="img_entreprise" src="img/insign.png" width="245" height="90" alt="insign.png">
                                </a>
                            </div>
                            <div class="align-items-center" id="profent">
                                <a href="#">
                                    <img class="img_entreprise" src="img/vega_systems_v2.jpg" width="245" height="90" alt="vega_systems_v2.jpg">
                                </a>
                            </div>
                            <div class="align-items-center" id="profent">
                                <a href="#">
                                    <img class="img_entreprise" src="img/mgo.png" width="245" height="90" alt="mgo.png">
                                </a>
                            </div>
                        </div>
                    </div>
            {{--End area Entreprises followed--}}
        </section>
    </main>

@endsection