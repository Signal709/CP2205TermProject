@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><h6>Name:</h6> {{ $dvd->name }}</div>
        <div class="card-body">
            <div class="h-30 w-15">
                <img src="{{ $dvd->image_url }}"  />
            </div>
            <p>Format:</p>
            <p>Location:</p>
            <p>Offical Website:</p>
            <p>IMDB:</p>
            <p>Rating: {{ $dvd->rating }}</p>
            <p>Number of Discs:</p>
            <p>Number of Episodes:</p>
            <p>Created at: {{ $dvd->created_at->format('Y-m-d H:i:s') }}</p>
            <p>Updated at: {{ $dvd->updated_at->format('Y-m-d H:i:s') }}</p>
            <div class="card-footer">
                {{-- <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a> --}}
                <a href="{{ route('DVDs.index') }}" class="btn btn-secondary">Back</a>
                {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </div>
            
        </div>
    </div>
@endsection