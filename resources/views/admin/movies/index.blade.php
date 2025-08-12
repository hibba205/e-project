@extends('partials.admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar bg-dark text-white min-vh-100">
      <div class="text-center mb-4 mt-3">
        <span class="fa fa-play icon-log" aria-hidden="true"></span>
        <h4>MyShowz Admin</h4>
      </div>
      <ul class="nav flex-column px-3">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/admin/dashboard') }}">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/admin/movies') }}">
            <i class="bi bi-film me-2"></i> Movies
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/admin/theaters') }}">
            <i class="bi bi-building me-2"></i> Theaters
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/admin/viewers') }}">
            <i class="bi bi-people me-2"></i> Users
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/admin/booking') }}">
            <i class="bi bi-people me-2"></i> Booking
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
          </a>
        </li>
      </ul>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </nav>

    <!-- Main Content -->
    <main class="col-md-10 ms-sm-auto px-md-4 mt-4">
      <h2>Manage Movies</h2>
      <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-lg"></i> Add Movie
      </a>

      <table class="table table-dark table-hover align-middle">
        <thead>
          <tr>
            <th>Title</th>
            <th>Duration</th>
            <th>Venue</th>
            <th>Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($movies as $movie)
            <tr>
              <td>{{ $movie->title }}</td>
              <td>{{ $movie->duration }}</td>
              <td>{{ $movie->venue }}</td>
              <td>
                @if($movie->image)
                  <img src="{{ asset('storage/' . $movie->image) }}" width="100">
                @else
                  No Image
                @endif
              </td>
              <td>
                <a href="{{ route('movies.edit', $movie) }}" class="btn btn-info btn-sm">Edit</a>
                <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </main>
  </div>
</div>
@endsection
