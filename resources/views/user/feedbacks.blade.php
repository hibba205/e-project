@extends('partials.user.main')

@section('content')
<div class="container py-5">
    <div class="container py-5">
  <h2>User Feedback</h2>
  </div>
  @foreach($feedbacks as $feedback)
    <div class="card mb-3">
      <div class="card-body  bg-dark">
        <h5>{{ $feedback->first_name }} {{ $feedback->last_name }}</h5>
        <p><strong>Email:</strong> {{ $feedback->email }}</p>
        <p><strong>Message:</strong> {{ $feedback->message }}</p>
        <small class="text-muted">Submitted on {{ $feedback->created_at->format('F j, Y') }}</small>
      </div>
    </div>
  @endforeach
</div>
@endsection 

