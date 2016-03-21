@extends('master')

@section('content')
    <h1>All Cards</h1>

    @foreach($cards as $card)
        <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
    @endforeach

@endsection