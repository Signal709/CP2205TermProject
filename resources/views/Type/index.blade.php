@extends('layouts.app')

@section('content')
    <div class="m-4">
        <h1>DVD Types</h1>
        <div>
            <a href="{{ route('DVDs.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('Type.create') }}" class="btn btn-secondary">Add Type</a>
        </div>
    </div>
    <div class="row">
        @foreach ($types as $type)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h6>Name:</h6> {{ $type->type_name }}</div>
                    <div class="card-body">
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('Type.show', $type->id) }}" class="btn btn-primary">View</a>
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
    <div>
        {{ $types->links('pagination::bootstrap-5') }}
    </div>
@endsection