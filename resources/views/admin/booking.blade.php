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
          <a class="nav-link text-white" href="{{ url('/admin/movies') }}">
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
          <a class="nav-link active" href="{{ url('/admin/booking') }}">
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
    <h2>All Bookings</h2>

    <table class="table table-dark table-hover align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Movie</th>
                <th>Day</th>
                <th>Screen</th>
                <th>Time</th>
                <th>Seats</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->movie->title ?? '-' }}</td>
                    <td>{{ $booking->day }}</td>
                    <td>{{ $booking->screen }}</td>
                    <td>{{ $booking->time }}</td>
                    <td>{{ $booking->seats }}</td>
                    <td>{{ $booking->created_at->format('d M Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</main>
</div>
</div>
@endsection
