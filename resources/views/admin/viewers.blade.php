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
          <a class="nav-link" href="{{ url('/movie') }}"><i class="bi bi-film me-2"></i>Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/theaters') }}"><i class="bi bi-building me-2"></i>Theaters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/admin/viewers') }}"><i class="bi bi-people me-2"></i>Users</a>
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
            <!-- <tr>
              <td>#1</td>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>2024-06-10</td>
              <td>
                <button class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>#2</td>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>2024-06-09</td>
              <td>
                <button class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            You can dynamically load more users here -->

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
