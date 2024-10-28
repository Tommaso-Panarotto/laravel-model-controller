@extends("layouts.app")

@section("head-title", "Movie")

@section("main-content")
<div class="container text-center">
    <h2>Movie</h2>
    <div class="row g-3">
    @forelse ($movies as $movie )
    <div class="card" style="width: 18rem;">
      <h2>{{$movie->title}}</h2>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    @empty
        <div class="col-12">
            <h2>Non ci sono Film disponibili...</h2>
        </div>
    @endforelse
    </div>
    </div>
@endsection
