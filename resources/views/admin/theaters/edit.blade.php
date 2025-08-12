@extends('partials.admin.main')
@section('content')
<div class="container mt-4">
  <h2>Manage Theaters</h2>
  <a href="{{ route('theaters.create') }}" class="btn btn-primary mb-3">
    <i class="bi bi-plus-lg"></i> Add Theater
  </a>

  <table class="table table-dark table-hover align-middle">
    <thead>
      <tr><th>Name</th><th>Location</th><th>Seats</th><th>Image</th><th>Actions</th></tr>
    </thead>
    <tbody>
      @foreach($theaters as $t)
        <tr>
          <td>{{ $t->name }}</td>
          <td>{{ $t->location }}</td>
          <td>{{ $t->seats }}</td>
          <td>
            @if($t->image)
              <img src="{{ asset('storage/'.$t->image) }}" width="100">
            @else No Image @endif
          </td>
          <td>
            <a href="{{ route('theaters.edit',$t) }}" class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></a>
            <form action="{{ route('theaters.destroy',$t) }}" method="POST" class="d-inline">
              @csrf @method('DELETE')
              <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

