@extends('partials.admin.main')
@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="text-center mb-4">
        <span class="fa fa-play icon-log"
							aria-hidden="true"></span>
        <h4>MyShowz Admin</h4>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/admin/dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/movies') }}"><i class="bi bi-film me-2"></i>Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/admin/theaters') }}"><i class="bi bi-building me-2"></i>Theaters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/viewers') }}"><i class="bi bi-people me-2"></i>Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/admin/booking') }}">
            <i class="bi bi-people me-2"></i> Booking
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-right me-2"></i>Logout
          </a>
        </li>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
           @csrf
          </form>
      </ul>
    </nav>

    <!-- Main -->
    <main class="col-md-10 ms-sm-auto px-md-4">
      <h2 class="mt-4">Manage Theaters</h2>

      <!-- Create Button -->
  <a href="{{ route('theaters.create') }}" class="btn btn-primary mb-3">
    <i class="bi bi-plus-lg"></i> Add Theater
  </a>

  <!-- Theater Table -->
  <table class="table table-dark table-hover align-middle">
    <thead>
      <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Seats</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($theaters as $t)
      <tr>
        <td>{{ $t->name }}</td>
        <td>{{ $t->location }}</td>
        <td>{{ $t->seats }}</td>
        <td>
          @if($t->image)
            <img src="{{ asset('storage/' . $t->image) }}" width="80">
          @else
            No image
          @endif
        </td>
        <td>
          <a href="{{ route('theaters.edit', $t) }}" class="btn btn-sm btn-info">
            <i class="bi bi-pencil"></i> Edit
          </a>
          <form action="{{ route('theaters.destroy', $t) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this theater?')">
              <i class="bi bi-trash"></i> Delete
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection