@extends('layouts.main')

@section('content')

<h1>home</h1>

@foreach ( $movies as $movie )

<div class="container d-flex flex-wrap">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <h6 class="card-title">{{$movie->original_title}}</h6>
          <p class="card-text">Nationality{{$movie->nationality}}</p>
          <p class="card-text">{{$movie->date}}</p>
          <p class="card-text">{{$movie->vote}}</p>

        </div>
      </div>
</div>

@endforeach





@endsection
