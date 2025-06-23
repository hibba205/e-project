@extends('partials.admin.main')
@section('content')
 <div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="text-center mb-4">
        <!-- <img src="https://i.imgur.com/0y0y0y0.png" alt="Logo" width="80" class="mb-2 rounded-circle"> -->
        <span class="fa fa-play icon-log"
							aria-hidden="true"></span>
        <h4>MyShowz Admin</h4>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/movie') }}"><i class="bi bi-film me-2"></i>Movies</a>
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

    <!-- Main Content -->
    <main class="col-md-10 ms-sm-auto px-md-4">

      <!-- Header -->
      <div class="dashboard-header mt-4">
        <div>
          <h2>Welcome {{ $user->name }}, Role: {{ $user->role }}</h2>
          <div class="text-muted">Manage your movies, theaters, users, and account here.</div>
        </div>
        <div class="balance">
          <i class="bi bi-wallet2"></i> Balance: <span id="balance">$2,500</span>
        </div>
      </div>
      <!-- <h1>Dashboard</h1>

<h2>Welcome {{ $user->name }}, Role: {{ $user->role }}</h2>
 <div class="text-muted">Manage your movies, theaters, users, and account here.</div>
 <div class="balance">
          <i class="bi bi-wallet2"></i> Balance: <span id="balance">$2,500</span>
        </div>
<form action="{{ url('/logout') }}" method="POST">
    @csrf
    <input type="submit" value="logout">
</form> -->
    
      <!-- Stats Cards -->
      <div class="row mb-4">
        <div class="col-md-3">
          <div class="card p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-film fs-2 me-3 text-info"></i>
              <div>
                <div class="fs-5" id="movieCount">12</div>
                <div class="text-muted">Movies</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-building fs-2 me-3 text-warning"></i>
              <div>
                <div class="fs-5" id="theaterCount">3</div>
                <div class="text-muted">Theaters</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-people fs-2 me-3 text-success"></i>
              <div>
                <div class="fs-5" id="userCount">1250</div>
                <div class="text-muted">Registered Users</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-bar-chart-line fs-2 me-3 text-danger"></i>
              <div>
                <div class="fs-5">Revenue</div>
                <div class="text-muted">$75,000</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Movies Table -->
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Movies</h5>
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addMovieModal">
            <i class="bi bi-plus-lg"></i> Add Movie
          </button>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
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
              <tbody id="moviesTable">
                <tr>
                  <td>Avengers: Endgame</td>
                  <td>IMAX Hall</td>
                  <td>Action</td>
                  <td>2019-04-26</td>
                  <td>
                    <button class="btn btn-sm btn-info"><i class="bi bi-pencil-square"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Account Section -->
      <div class="card mb-4">
        <div class="card-header">
          <h5>Account</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" value="admin" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="admin@myshowz.com" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Change Password</label>
                <input type="password" class="form-control" placeholder="New Password">
              </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Update Account</button>
          </form>
        </div>
      </div>

    </main>
  </div>
</div>

<!-- Add Movie Modal -->
<div class="modal fade" id="addMovieModal" tabindex="-1" aria-labelledby="addMovieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMovieModalLabel">Add Movie</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Movie Title</label>
          <input type="text" class="form-control" placeholder="Enter movie title">
        </div>
        <div class="mb-3">
          <label class="form-label">Theater</label>
          <input type="text" class="form-control" placeholder="Theater name">
        </div>
        <div class="mb-3">
          <label class="form-label">Genre</label>
          <input type="text" class="form-control" placeholder="Genre">
        </div>
        <div class="mb-3">
          <label class="form-label">Release Date</label>
          <input type="date" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Save Movie</button>
      </div>
    </form>
  </div>
</div> 
@endsection



