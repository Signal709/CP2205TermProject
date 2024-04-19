@extends('layouts.app')

@section('content')
    <div class="m-4">
        <h1>DVD Genres</h1>
        <div>
            <a href="{{ route('DVDs.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('Genre.create') }}" class="btn btn-secondary">Add Genre</a>
        </div>
    </div>
    <div class="row">
        @foreach ($genres as $genre)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h6>Name:</h6> {{ $genre->genre_name }}</div>
                    <div class="card-body">
                        {{-- <h5>Bio:</h5>
                        <p>{{ $author->bio }}</p> --}}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('Genre.show', $genre->id) }}" class="btn btn-primary">View</a>
                        {{-- <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a> --}}
                        {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection