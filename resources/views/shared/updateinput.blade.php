<div class="col col-lg-2">
<form action="{{route('edit-post', ['post' => $post->id])}}" method="GET">
    @csrf
    <button type="submit">Editer</button>
</form>
</div>