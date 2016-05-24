@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>All Cards</h1>
            <ul class="list-group">
            @foreach($cards as $card)
                <li class="list-group-item"><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></li>
            @endforeach
            </ul>

            <h3>Add New Card</h3>

            <form method="POST" action="/cards">
                <div class="form-group">
                    <input name="title" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" value="Add Note" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

@endsection