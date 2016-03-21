@extends('master')

@section('content')

    {{ $card->title }}

    <ul>
        @foreach($card->notes as $note)
            <li>{{ $note->body }}</li>
        @endforeach
    </ul>
@endsection