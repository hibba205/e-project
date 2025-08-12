@extends('partials.admin.main')
@section('content')
<div class="container mt-4">
  <h2>{{ $movie->exists ? 'Edit' : 'Add' }} Movie</h2>
  <form method="POST" action="{{ $movie->exists ? route('movies.update', $movie) : route('movies.store') }}" enctype="multipart/form-data">
    @csrf
    @if($movie->exists) @method('PUT') @endif

    <div class="mb-3">
      <label>Title</label>
      <input name="title" class="form-control" value="{{ old('title', $movie->title) }}" required>
    </div>
    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control" required>{{ old('description', $movie->description) }}</textarea>
    </div>
    <div class="mb-3">
      <label>Duration</label>
      <input name="duration" class="form-control" value="{{ old('duration', $movie->duration) }}" required>
    </div>
    <div class="mb-3">
      <label>Release Date</label>
      <input name="release_date" type="date" class="form-control" value="{{ old('release_date', $movie->release_date) }}" required>
    </div>
    <div class="mb-3">
      <label>Venue</label>
      <input name="venue" class="form-control" value="{{ old('venue', $movie->venue) }}" required>
    </div>
    <div class="mb-3">
      <label>Cast</label>
      <textarea name="cast" class="form-control">{{ old('cast', $movie->cast) }}</textarea>
    </div>
    <div class="mb-3">
      <label>Trailer URL (YouTube)</label>
      <input name="trailer_url" class="form-control" value="{{ old('trailer_url', $movie->trailer_url) }}">
    </div>
    <div class="mb-3">
      <label>Image</label>
      <input type="file" name="image" class="form-control">
      @if($movie->image)
        <img src="{{ asset('storage/' . $movie->image) }}" width="120" class="mt-2 border">
      @endif
    </div>
    <button class="btn btn-success">{{ $movie->exists ? 'Update' : 'Add' }}</button>
  </form>
</div>
@endsection

