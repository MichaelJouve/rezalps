@extends('layouts.layout-user')

@section('content')
    <main>
        <section id="content" class="container">
            <div class="row">
                <div class=" row col-12">
                    <div class="col-md-3 col-sm-12">
                        <div id="apropos">
                            <h2>A propos</h2>
                            <div class="card">
                                <p>
                                    Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi. De quibus tres video sententias ferri, quarum nullam probo, unam, ut eodem modo erga amicum adfecti simus, quo erga nosmet ipsos, alteram, ut nostra in amicos benevolentia illorum erga nos benevolentiae pariter aequaliterque respondeat, tertiam, ut, quanti quisque se ipse facit, tanti fiat ab amicis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div id="experiences">
                            <h2>CV</h2>
                            <div class="card">
                                <p>Pour afficher votre CV sur votre page veuillez l'importer ci-dessous.</p>
                                <form method="post" action="" >
                                    <div class="upload-btn-wrapper">
                                        <button class="btn">Importer</button>
                                        <input type="file" name="myfile" />
                                    </div>
                                    <div class="alignement_droite">
                                        <input type="submit" class="btn" value="Soumettre" />
                                    </div>
                                </form>
                                <!-- La div suivante permet de rajouter un viewer PDF -->
                                <div id="pdf">
                                    <div class="pdfobject-com">
                                        <embed class="pdfobject" src="img/PDF_test.pdf" type="application/pdf">
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
                            Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat
                        </p>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        </div>
    </main>
    @endsection