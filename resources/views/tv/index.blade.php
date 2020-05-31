@extends('layout.master')
@section('title', 'TV Shows')
    
@section('content')

<div class="container mx-auto px-4 pt-4">
  <div class="popular-tv py-8">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Shows</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
      @foreach ($popularTV as $tv)
        <x-tv-card :tv="$tv"/>
      @endforeach
    </div>
  </div>
  <div class="top-rated py-8">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Shows</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
      @foreach ($topTV as $tv)
        <x-tv-card :tv="$tv"/>
      @endforeach
    </div>
  </div>
</div>

@endsection