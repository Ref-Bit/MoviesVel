@extends('layout.master')

@section('content')
<div class="container mx-auto px-4 pt-4">
  <div class="popular-actors py-8">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Actors</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
      @foreach ($popularActors as $actor)
        <div class="actor mt-8">
          <a href="{{ route('actors.show', $actor['id']) }}">
            <img src="{{ $actor['profile_path'] }}" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="{{ route('actors.show', $actor['id']) }}" class="text-lg hover:text-gray-300">{{ $actor['name'] }}</a>
            <div class="text-sm text-gray-400 truncate" title="{{ $actor['known_for'] }}">{{ $actor['known_for'] }}</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="page-load-status my-8">
    <div class="flex justify-center">
      <div class="infinite-scroll-request loader my-8 ease-linear rounded-full border-8 border-t-8 border-gray-200 h-32 w-32">&nbsp;</div>
    </div>
    <p class="infinite-scroll-last text-xl text-gray-800">End of content</p>
    <p class="infinite-scroll-error">Error</p>
  </div>
</div>
@endsection

@push('scripts')
  <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
  <script>
    let elem = document.querySelector('.popular-actors .grid');
    let infScroll = new InfiniteScroll( elem, {
      // options
      path: '/actors/page/@{{#}}',
      append: '.actor',
      history: false,
      status: '.page-load-status',

    });
  </script>
@endpush