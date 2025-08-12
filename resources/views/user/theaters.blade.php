@extends('partials.user.main')
@section('content')
<div class="container py-5">
  <h2 class="text-center mb-4">Explore Our Theaters</h2>
  <div class="row">
    @foreach($theaters as $t)
    <div class="col-md-4 mb-4">
      <div class="card shadow h-100">
        @if($t->image)
          <img src="{{ asset('storage/'.$t->image) }}"  class="card-img-top" alt="{{ $t->name }}">
        @else
          <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center" style="height:200px">
            <span class="text-light">No Image</span>
          </div>
        @endif
        <div class="card-body bg-dark text-light">
          <h5>{{ $t->name }}</h5>
          <p>{{ $t->location }}</p>
        </div>
        <div class="card-footer bg-purple text-white text-center">Seats: {{ $t->seats }}</div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection

