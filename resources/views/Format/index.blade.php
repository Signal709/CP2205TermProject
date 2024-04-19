@extends('layouts.app')

@section('content')
    <div class="m-4">
        <h1>DVD Formats</h1>
        <div>
            <a href="{{ route('DVDs.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('Format.create') }}" class="btn btn-secondary">Add Format</a>
        </div>
    </div>
    <div class="row">
        @foreach ($formats as $format)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h6>Name:</h6> {{ $format->format_name }}</div>
                    <div class="card-body">
                        {{-- <h5>Bio:</h5>
                        <p>{{ $author->bio }}</p> --}}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('Format.show', $format->id) }}" class="btn btn-primary">View</a>
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