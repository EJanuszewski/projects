@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->title }}</h1>

            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">{{ $note->body }}</li>
                @endforeach
            </ul>

            <h3>Add New Note</h3>

            <form method="POST" action="/cards/{{ $card->id }}/notes">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Add Note" class="btn btn-primary" />
                </div>
            </form>

        </div>
    </div>
@endsection