@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><h6>Name:</h6> {{ $dvd->name }}</div>
        <div class="card-body">
            <div class="h-30 w-15">
                <img src="{{ $dvd->image_url }}"  />
            </div>
            <p>Format: {{ $dvd->format->format_name }}</p>
            <p>Location: {{ $dvd->location->location_name }}</p>
            <p>Type: {{ $dvd->type->type_name }}</p>
            <p>Offical Website: {{ $dvd->offical_website }}</p>
            <p>IMDB: {{ $dvd->imdb }}</p>
            <p>Rating: {{ $dvd->rating }}</p>
            <p>Number of Discs: {{ $dvd->disc }}</p>
            {{-- <p>Number of Episodes: {{ $dvd->}}</p> --}}
            <p>Created at: {{ $dvd->created_at->format('Y-m-d H:i:s') }}</p>
            <p>Updated at: {{ $dvd->updated_at->format('Y-m-d H:i:s') }}</p>
            <div class="card-footer">
                <a href="{{ route('DVDs.edit', $dvd->id) }}" class="btn btn-warning">Edit</a>
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