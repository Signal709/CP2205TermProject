@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add New Format</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('Format.store') }}" method="post">
                @csrf

                {{-- New Format --}}
                <div class="form-group">
                    <label for="format">Format Name:</label>
                    <input type="text" name="format" id="format"
                        class="form-control @error('format') is-invalid @enderror"
                        value="{{ old('format') }}">
                    @error('format')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('Format.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection