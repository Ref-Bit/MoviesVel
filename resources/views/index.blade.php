@extends('layout.master')

@section('content')

  <div class="container mx-auto px-4 pt-4">
    <div class="popular-movies py-8">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($popularMovies as $movie)
          <x-movie-card :movie="$movie" :genres="$genres"/>
        @endforeach
      </div>
    </div>
    <div class="now-playing py-8">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($nowMovies as $movie)
          <x-movie-card :movie="$movie" :genres="$genres"/>
        @endforeach
      </div>
    </div>
  </div>
    
@endsection