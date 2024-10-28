@extends("layouts.app")

@section("head-title", "Movie")

@section("main-content")
<div class="container text-center">
    <h1 class="mt-5">Film</h1>
    <div class="row g-3 mt-5">
    @forelse ($movies as $movie )
    <div class="col-4">
    <div class="card">
      <h2>{{$movie->title}}</h2>
      <div class="card-body">
        <div class="card-text"><h5>{{$movie->original_title}}</h5><span>{{$movie->nationality}}</span></div>
        <div class="card-text"><p>{{$movie->date}}</p><span>Voto: {{$movie->vote}}</span></div>
      </div>
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
