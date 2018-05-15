@extends('layouts.profil')
@section('content')
    <main>
        <section id="content" class="container">
            <div class="row">
                <div class=" row col-12">
                    <div class="col-md-3 col-sm-12">
                        <div id="apropos">
                            <h2>A propos</h2>
                            <div class="card">
                                <div class="card-body">
                                    <form method="post"  action="{{ ('update-apropos') }}">
                                        @csrf
                                        <textarea name="description" class="form-control" rows="10">{{ $user->description }}</textarea>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-secondary" type="submit">Modifier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div id="experiences">
                            <h2>CV</h2>
                            <div class="card">
                                <p>Pour afficher votre CV sur votre page veuillez l'importer ci-dessous.</p>
                                <form method="post" action="{{ route('update-cv') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="upload-btn-wrapper">
                                        <button class="btn">Importer</button>
                                        <input type="file" name="cv"/>
                                    </div>

                                    <div class="alignement_droite">
                                        <input type="submit" class="btn" value="Soumettre"/>
                                    </div>
                                </form>
                                <!-- La div suivante permet de rajouter un viewer PDF -->
                                <div id="pdf">
                                    <div class="pdfobject-com">
                                        <embed class="pdfobject" src="{{ asset('storage/' .$user->cv) }}" name="cv" type="application/pdf">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 content-videos">
                        <h3>Video de présentation</h3>
                        <div class="card">
                            <div class="card-body">
                                <video class="img-fluid" src="videos/video.mp4" controls></video>
                            </div>
                        </div>
                    </div>
                    <div id="hobby">
                        <h3>Mes hobbies</h3>
                        <p>
                            Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra
                            urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo
                            insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut
                            nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos
                            usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat
                        </p>
                    </div>
                </div>
            </div>

        </section>

    </main>
@endsection