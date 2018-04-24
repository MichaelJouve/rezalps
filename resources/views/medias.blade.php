@extends('layouts.layout-profil')

@section('content')

    <main>
        <section class="container">
            <div class="row">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 content-photos">
                        <h3>Photos</h3>
                        <div class="card">
                            <img class="card-img-top" src="img/logo-appli.png" alt="Image principale de la card">
                            <div class="card-body">
                                <h5 class="card-title">Titre image</h5>
                                <p class="card-text">petit blabla</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="img/michael-photo.jpg" alt="Image principale de la card">
                            <div class="card-body">
                                <h5 class="card-title">Titre image</h5>
                                <p class="card-text">petit blabla</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="img/michael-photo.jpg" alt="Image principale de la card">
                            <div class="card-body">
                                <h5 class="card-title">Titre image</h5>
                                <p class="card-text">petit blabla</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="img/michael-photo.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Titre image</h5>
                                <p class="card-text">petit blabla</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 content-videos">
                        <h3>Videos</h3>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Titre vidéo
                                </h3>
                            </div>
                            <div class="card-body">
                                <video class="img-fluid" src="videos/video.mp4" controls></video>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Titre vidéo
                                </h3>
                            </div>
                            <div class="card-body">
                                <video class="img-fluid" src="videos/video.mp4" controls></video>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Titre vidéo
                                </h3>
                            </div>
                            <div class="card-body">
                                <video class="img-fluid" src="videos/video.mp4" controls></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 content-documents">
                        <h3>Documents</h3>
                        <div class="card">
                            <div class="card-block text-center">
                                <h3>document 1</h3>
                                <i class="fas fa-file-alt fa-7x i-doc"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block text-center">
                                <h3>document 1</h3>
                                <i class="fas fa-file-alt fa-7x i-doc"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block text-center">
                                <h3>document 1</h3>
                                <i class="fas fa-file-alt fa-7x i-doc"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>

@endsection