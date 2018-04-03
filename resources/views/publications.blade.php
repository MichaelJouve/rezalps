@extends('layouts.our-layout')

<div class="profil-publications col-lg-9 col-12"> <!-- Colonne flux publications -->
@section('publier')
    <div class="card-deck"> <!-- PUBLICATION 0 -->
        <div class="card">
            <div class="card-body">
                <form action="">
                    <textarea name="" id="" cols="100" rows="3" placeholder="Publier ..."></textarea>
                    <div class="upload-btn-wrapper">
                        <button class="btn">Pièce jointe</button>
                        <input type="file" name="myfile"/>
                    </div>
                    <div class="alignement_droite">
                        <input type="submit" class="btn" value="Envoyer"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('historique-publications')
    <!--   zones qui afficheront les données enregistrées des publications  -->
    <div class="card-deck">
        <div class="card">   <!-- PUBLICATION 1 -->
            <img class="card-img-top" src="{{ asset('img/rezalps_img.png') }}" alt="Logo Rezalps Application">
            <div class="card-body">
                <p class="card-text">Le site Rezalps a enfin ouvert !</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <button class="button-like"></button>
                    <button class="button-dislike"></button>
                    5 commentaires | Publié il y a 5 minutes
                </small>
            </div>
        </div>
    </div>
@endsection
</div>
