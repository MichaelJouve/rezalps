@foreach(Auth::user()->sender as $sender)
    <a href="{{ URL::route('user.publications', ['id' => $sender->id]) }}">
        <img class="img_contact"
             src="{{ asset('storage/' .$sender->avatar) }}" width="50"
             height="50" alt="{{ $sender->name }}">
    </a>
@endforeach
