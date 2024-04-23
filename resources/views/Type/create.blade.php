@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add New Type</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('Type.store') }}" method="post">
                @csrf

                {{-- New Type --}}
                <div class="form-group">
                    <label for="type">Type Name:</label>
                    <input type="text" name="type" id="type"
                        class="form-control @error('type') is-invalid @enderror"
                        value="{{ old('type') }}">
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('Type.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection