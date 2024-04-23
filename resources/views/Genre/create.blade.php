@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add New Genre</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('Genre.store') }}" method="post">
                @csrf

                {{-- New Genre --}}
                <div class="form-group">
                    <label for="genre">Genre Name:</label>
                    <input type="text" name="genre" id="genre"
                        class="form-control @error('genre') is-invalid @enderror"
                        value="{{ old('genre') }}">
                    @error('genre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('Genre.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection