<form action="{{route('delete-post', $post->id)}}" method="DELETE">
    @csrf
    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre post ?');">Supprimer</button>
</form>

{{--<form action="{{ route('delete-post',$post->id) }}" method="POST"">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="submit" value="Supprimer">
</form>--}}
