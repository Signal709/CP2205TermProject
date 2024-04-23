@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add New Location</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('Location.store') }}" method="post">
                @csrf

                {{-- New location --}}
                <div class="form-group">
                    <label for="location">Location Name:</label>
                    <input type="text" name="location" id="location"
                        class="form-control @error('location') is-invalid @enderror"
                        value="{{ old('location') }}">
                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('Location.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection