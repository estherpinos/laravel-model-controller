


<?php
$img = config('img');

?>
@extends('layouts.main')

@section('content')



<h1 class="text-center my-3 text-white">Movies</h1>



    <div class="container d-flex flex-wrap">

        @foreach ( $movies as $movie )

                <div class="card m-2" style="width: 18rem;">


                    <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-title">Original title: {{$movie->original_title}}</h6>
                    <p class="card-text">Nationality: {{$movie->nationality}}</p>
                    <p class="card-text">Date: {{$movie->date}}</p>
                    <p class="card-text">Vote: {{$movie->vote}}</p>

                    </div>
                </div>
        @endforeach
    </div>







@endsection
