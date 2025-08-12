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
          <a class="nav-link active" href="{{ url('/admin/dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/movies') }}"><i class="bi bi-film me-2"></i>Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/theaters') }}"><i class="bi bi-building me-2"></i>Theaters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/viewers') }}"><i class="bi bi-people me-2"></i>Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/admin/booking') }}"><i class="bi bi-people me-2"></i> Booking</a>
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
       <h4>User Feedbacks</h4>

    @forelse($feedbacks as $feedback)
        <div class="card mb-3">
            <div class="card-body bg-dark">
                <h5>{{ $feedback->first_name }} {{ $feedback->last_name }}</h5>
                <p><strong>Email:</strong> {{ $feedback->email }}</p>
                <p><strong>Message:</strong> {{ $feedback->message }}</p>
                <small class="text-muted">Submitted on {{ $feedback->created_at->format('F j, Y') }}</small>
            </div>
        </div>
    @empty
        <p>No feedbacks yet.</p>
    @endforelse

    <div class="mt-3">
        {{ $feedbacks->links() }} {{-- Pagination --}}
    </div>
</div>

@endsection



