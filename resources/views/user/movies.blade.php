@extends('partials.user.main') 

@section('content')
<section class="w3l-grids">
  <div class="grids-main py-5">
    <div class="container py-lg-4">
      <div class="headerhny-title">
        <div class="w3l-title-grids">
          <div class="headerhny-left">
            <h3 class="hny-title">Latest Movies</h3>
          </div>
          <div class="headerhny-right text-lg-right">
            <h4><a class="show-title" href="#">Show all</a></h4>
          </div>
        </div>
      </div>

      <div class="w3l-populohny-grids">
        @foreach($movies as $movie)
        <div class="item vhny-grid">
          <div class="box16 mb-0">
            <figure>
              <img class="img-fluid" src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}">
            </figure>
            <a href=".movieModal{{ $movie->id }}" data-toggle="modal">
              <div class="box-content">
                <h3 class="title">{{ $movie->title }}</h3>
                <h4>
                  <span class="post"><span class="fa fa-clock-o"> </span> {{ $movie->duration }}</span>
                  <span class="post fa fa-heart text-right"></span>
                </h4>
              </div>
            </a>

            <!-- Modal -->
            <div class="modal fade movieModal{{ $movie->id }}" id="myModal" tabindex="-1" role="dialog"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" id="mymodalcontent">
                  <div class="modal-header">
                    <h4 class="modal-title">DETAILS</h4>
                    <button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body" id="dynamic-content">
                    <img src="{{ asset('storage/' . $movie->image) }}" class="img-fluid modalimg mb-2" alt="{{ $movie->title }}">
                    <p>
                      <h3>Release Date&nbsp;: {{ \Carbon\Carbon::parse($movie->release_date)->format('d M Y') }}</h3>
                      <h3>Venue&nbsp;: {{ $movie->venue }}</h3>
                    </p>
                    <h4>About Movie</h4>
                    <p>{{ $movie->description }}</p>

                    @if($movie->cast)
                    <h4>Star Cast</h4>
                    <p>{!! nl2br(e($movie->cast)) !!}</p>
                    @endif
                  </div>

                  <div class="bookbtn p-3">
    <button type="button" class="btn btn-success"
    onclick="window.location.href='{{ url('/booking?movie_id=' . $movie->id) }}';">
    Book
</button>


                    @if($movie->trailer_url)
                      <a href="{{ $movie->trailer_url }}" class="btn btn-warning" target="_blank">Watch Trailer</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- End Modal -->

          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection
