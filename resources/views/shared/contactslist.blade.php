@foreach($user->receiver as $receiver)
    <a href="{{ URL::route('user.publications', ['id' => $receiver->id]) }}">
        <img class="img_contact"
             src="{{ asset('storage/' .$receiver->avatar) }}" width="50"
             height="50" alt="{{ $receiver->name }}">
        <p>{{ $receiver->name }}</p>
    </a>
@endforeach
