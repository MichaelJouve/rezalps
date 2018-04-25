    <form action="{{route('add-post')}}" method="POST">
        @csrf
        <textarea name="publication" cols="100" rows="3" placeholder="Publier ..."></textarea>
        <div class="upload-btn-wrapper">
            <button class="btn">Pièce jointe</button>
            <input type="file" name="myfile"/>
        </div>
        <div class="alignement_droite">
            <input type="submit" class="btn" value="Envoyer"/>
        </div>
    </form>
