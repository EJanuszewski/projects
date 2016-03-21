@extends('master')

@section('content')
    This is the welcome view

    @if (empty($people))
        There are no people
    @else
        There are people, listed below
    @endif

    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach

@stop