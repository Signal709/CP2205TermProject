@extends('layouts.app')

@section('content')
    <div class="m-4">
        <h1>DVD Catalog</h1>
        <h3>DVDs</h3>
        <div>
            <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
            {{-- <a href="#" class="btn btn-secondary">Add Book</a> --}}
        </div>

    </div>
    <div class="row">
        @foreach ($dvds as $dvd)
            <div class="col-md-3 p-2">
                <div class="card">
                    <div class="card-header">Name: {{ $dvd->name }}</div>
                    <div class="card-body">
                        <div class="object-fit h-30 w-15">
                            <img src="{{ $dvd->image_url }}" />
                        </div>
                        <p>Rating: {{ $dvd->rating }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('DVDs.show', $dvd->id) }}" class="btn btn-primary">View</a>
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