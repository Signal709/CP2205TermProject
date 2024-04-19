@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Edit DVD</h1>
        </div>
        <div class="card-format">
            <form action="{{ route('DVDs.update', $dvd->id) }}" method="post">
                @csrf
                @method('PUT')

                {{-- Name --}}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') ?? $dvd->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Format --}}
                <div class="form-group">
                    <label for="format">Format:</label>
                    <select name="format" id="format" class="form-control @error('format') is-invalid @enderror">
                        <option value="">Select a Format</option>
                        @foreach ($formats as $format)
                            <option value="{{ $format->id }}"
                                {{ old('format', $dvd->format) == $format->name ? 'selected' : '' }}>
                                {{ $format->format_name }}</option>
                        @endforeach
                    </select>
                    @error('format')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Location --}}
                <div class="form-group">
                    <label for="location">Location:</label>
                    <select name="location" id="location" class="form-control @error('location') is-invalid @enderror">
                        <option value="">Select a Location</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}"
                                {{ old('location', $dvd->location) == $location->name ? 'selected' : '' }}>
                                {{ $location->location_name }}</option>
                        @endforeach
                    </select>
                    @error('format')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Type --}}
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                        <option value="">Select a Type</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}"
                                {{ old('type', $dvd->type) == $type->name ? 'selected' : '' }}>
                                {{ $type->type_name }}</option>
                        @endforeach
                    </select>
                    @error('format')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Offical Website --}}
                <div class="form-group">
                    <label for="offical_website">Offical Website:</label>
                    <input type="text" name="offical_website" id="offical_website"
                        class="form-control @error('offical_website') is-invalid @enderror"
                        value="{{ old('offical_website') ?? $dvd->offical_website }}">
                    @error('offical_website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                {{-- IMDB --}}
                <div class="form-group">
                    <label for="imdb">IMDB:</label>
                    <input type="text" name="imdb" id="imdb"
                        class="form-control @error('imdb') is-invalid @enderror"
                        value="{{ old('imdb') ?? $dvd->imdb }}">
                    @error('imdb')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Rating --}}
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <input type="text" name="rating" id="rating"
                        class="form-control @error('rating') is-invalid @enderror"
                        value="{{ old('rating') ?? $dvd->rating }}">
                    @error('rating')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Number of Discs --}}
                <div class="form-group">
                    <label for="disc">Number of Discs:</label>
                    <input type="text" name="disc" id="disc"
                        class="form-control @error('disc') is-invalid @enderror"
                        value="{{ old('disc') ?? $dvd->disc }}">
                    @error('disc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('DVDs.show', $dvd->id) }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection