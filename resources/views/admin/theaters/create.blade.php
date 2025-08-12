@extends('partials.admin.main')
@section('content')
<div class="container mt-4">
  <h2>{{ $theater->exists ? 'Edit' : 'Add' }} Theater</h2>
  <form action="{{ $theater->exists ? route('theaters.update',$theater) : route('theaters.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($theater->exists) @method('PUT') @endif

    <div class="mb-3">
      <label>Name</label>
      <input name="name" class="form-control" value="{{ old('name',$theater->name) }}" required>
    </div>
    <div class="mb-3">
      <label>Location</label>
      <input name="location" class="form-control" value="{{ old('location',$theater->location) }}" required>
    </div>
    <div class="mb-3">
      <label>Seats</label>
      <input name="seats" type="number" class="form-control" value="{{ old('seats',$theater->seats) }}" required>
    </div>
    <div class="mb-3">
      <label>Image</label>
      <input type="file" name="image" class="form-control">
      @if($theater->image)
        <img src="{{ asset('storage/'.$theater->image) }}" width="120" class="mt-2 border">
      @endif
    </div>

    <button class="btn btn-primary">{{ $theater->exists ? 'Update' : 'Add' }}</button>
    <a href="{{ route('theaters.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection

