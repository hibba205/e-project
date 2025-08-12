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
          <a class="nav-link" href="{{ url('/admin/dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/movies') }}"><i class="bi bi-film me-2"></i>Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/theaters') }}"><i class="bi bi-building me-2"></i>Theaters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/admin/viewers') }}"><i class="bi bi-people me-2"></i>Users</a>
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
      <h2 class="mt-4">Registered Users</h2>

      <div class="card mt-4 p-3">
        <div class="d-flex justify-content-between mb-3">
          <h5>User List</h5>
        </div>
        <table class="table table-dark table-hover mb-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Age</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role }}</td>
              <td>{{ $user->age }}</td>
            </tr>
              
            @endforeach


          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>
@endsection
