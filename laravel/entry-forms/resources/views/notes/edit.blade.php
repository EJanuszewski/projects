@extends('master')

@section('content')
    <h1>Edit Note</h1>

    <form method="POST" action="/notes/{{ $note->id }}">
        {{ method_field('PATCH') }}
        <div class="form-group">
            <textarea name="body" class="form-control">{{ $note->body }}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Update Note" class="btn btn-primary" />
        </div>
    </form>
@endsection