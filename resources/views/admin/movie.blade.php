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
          <a class="nav-link active" href="{{ url('/movie') }}"><i class="bi bi-film me-2"></i>Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/theaters') }}"><i class="bi bi-building me-2"></i>Theaters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/viewers') }}"><i class="bi bi-people me-2"></i>Users</a>
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
      <h2 class="mt-4">Manage Movies</h2>

      <div class="card mt-4 p-3">
        <div class="d-flex justify-content-between mb-3">
          <h5>Movie List</h5>
          <button class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Add Movie</button>
        </div>

        <table class="table table-dark table-hover mb-0">
          <thead>
            <tr>
              <th>Title</th>
              <th>Theater</th>
              <th>Genre</th>
              <th>Release Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Avengers: Endgame</td>
              <td>Theater 1</td>
              <td>Action</td>
              <td>2019-04-26</td>
              <td>
                <button class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <!-- Dynamically Load more -->
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
    
@endsection
