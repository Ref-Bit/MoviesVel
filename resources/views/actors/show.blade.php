@extends('layout.master')
@section('title', $actor['name'])

@section('content')
  <div class="actor-info border-b border-gray-800">
    <div class="container mx-auto p-4 flex flex-col md:flex-row">
      <div class="flex-none">
        <a href="{{ $actor['profile_path'] }}" data-fancybox>
          <img src="{{ $actor['profile_path'] }}" alt="{{ $actor['name'] }}-Image" class="w-64 md:w-96">
        </a>
        <ul class="flex items-center mt-4">
          @if($social['facebook'])
          <li class="mx-1">
            <a href="{{ $social['facebook'] }}" rel="noopener noreferrer" target="_blank" title="Facebook">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="fill-current text-gray-400 hover:text-white w-5 h-5 transition duration-150" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
          </li>
          @endif
          @if($social['instagram'])
          <li class="mx-1">
            <a href="{{ $social['instagram'] }}" rel="noopener noreferrer" target="_blank" title="Instagram">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="stroke-current text-gray-400 hover:text-white w-5 h-5 transition duration-150" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
          </li>
          @endif
          @if($social['twitter'])
          <li class="mx-1">
            <a href="{{ $social['twitter'] }}" rel="noopener noreferrer" target="_blank" title="Twitter">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="fill-current text-gray-400 hover:text-white w-5 h-5 transition duration-150" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
          </li>
          @endif
          @if($actor['homepage'])
          <li class="mx-1">
            <a href="{{ $actor['homepage'] }}" rel="noopener noreferrer" target="_blank" title="Website">
              <svg class="fill-current text-gray-400 hover:text-white w-5 h-5 transition duration-150" viewBox="0 0 496 512"><path d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 01-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 01-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 00-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 00-15.55-3.1l-31.17 10.39a11.95 11.95 0 00-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 018.93 21.57 46.536 46.536 0 01-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 010-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"/></svg>
            </a>
          </li>
          @endif
        </ul>
      </div>
      <div class="md:ml-16">
        <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>      
        <div class="flex flex-wrap items-center text-sm text-gray-400">
          <span>
           <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="24px" viewBox="0 0 512 512" width="24px" class=""><g><g><path d="m343.2 0v30h-2.13c-13.25 0-24.02 10.77-24.02 24.02h-30c0-14.47 5.71-27.62 15-37.32 9.84-10.29 23.69-16.7 39.02-16.7z" fill="#682a00" data-original="#682A00" class=""/><path d="m348.1 79.3c0 19.92-12.65 36.89-30.35 43.31v20.27h-31.4v-20.27c-17.7-6.42-30.35-23.39-30.35-43.31 0-25.44 20.61-46.05 46.05-46.05s46.05 20.61 46.05 46.05z" fill="#ff7b49" data-original="#FF7B49" class=""/><path d="m348.1 79.3c0 19.92-12.65 36.89-30.35 43.31v20.27h-15.7v-109.63c25.44 0 46.05 20.61 46.05 46.05z" fill="#fd435b" data-original="#FD435B" class=""/><path d="m251.1 0v30h-2.13c-13.25 0-24.02 10.77-24.02 24.02h-30c0-14.47 5.71-27.62 15-37.32 9.84-10.29 23.69-16.7 39.02-16.7z" fill="#682a00" data-original="#682A00" class=""/><path d="m256 79.3c0 19.92-12.65 36.89-30.35 43.31v20.27h-31.4v-20.27c-17.7-6.42-30.35-23.39-30.35-43.31 0-25.44 20.61-46.05 46.05-46.05s46.05 20.61 46.05 46.05z" fill="#ff7b49" data-original="#FF7B49" class=""/><path d="m256 79.3c0 19.92-12.65 36.89-30.35 43.31v20.27h-15.7v-109.63c25.44 0 46.05 20.61 46.05 46.05z" fill="#fd435b" data-original="#FD435B" class=""/><path d="m463.14 301.69v121.76h-413.83v-121.76l16.01-18.69h381.81z" fill="#b46615" data-original="#B46615" class=""/><path d="m447.13 283 16.01 18.69v121.76h-207.14v-140.45z" fill="#874208" data-original="#874208" class=""/><path d="m501.7 416.33-28.34 95.67h-434.71l-28.35-95.67z" fill="#7eeefc" data-original="#7EEEFC" class="" style="fill:#374957" data-old_color="#7eeefc"/><path d="m501.7 416.33-28.34 95.67h-217.36v-95.67z" fill="#22c2e7" data-original="#22C2E7" class="active-path" style="fill:#374957" data-old_color="#22c2e7"/><path d="m0 401.32h512v30h-512z" fill="#22c2e7" data-original="#22C2E7" class="active-path" style="fill:#374957" data-old_color="#22c2e7"/><path d="m256 401.32h256v30h-256z" fill="#019be6" data-original="#019BE6" class="" style="fill:#374957" data-old_color="#019be6"/><path d="m463.14 209.29v92.4c-25.66.13-25.74 21.49-51.55 21.49-25.9 0-25.9-21.49-51.79-21.49-25.9 0-25.9 21.49-51.79 21.49s-25.89-21.49-51.79-21.49h-.22c-25.67.12-25.74 21.49-51.56 21.49-25.9 0-25.9-21.49-51.79-21.49-25.9 0-25.9 21.49-51.79 21.49-25.82 0-25.9-21.36-51.55-21.49v-92.4l16.01-21.62h381.81z" fill="#fdbf00" data-original="#FDBF00" class=""/><path d="m463.14 209.29v92.4c-25.66.13-25.74 21.49-51.55 21.49-25.9 0-25.9-21.49-51.79-21.49-25.9 0-25.9 21.49-51.79 21.49s-25.89-21.49-51.79-21.49h-.22v-114.02h191.13z" fill="#ff9f00" data-original="#FF9F00" class=""/><path d="m463.14 160.21v49.08h-413.83v-49.08c0-20.77 16.83-37.61 37.6-37.61h338.62c20.77 0 37.61 16.84 37.61 37.61z" fill="#fff9e1" data-original="#FFF9E1" class=""/><path d="m463.14 160.21v49.08h-207.14v-86.69h169.53c20.77 0 37.61 16.84 37.61 37.61z" fill="#ffdea8" data-original="#FFDEA8" class="" style="fill:#FFDEA8"/></g></g> </svg>
          </span>
          <span class="ml-2">{{ $actor['birthday'] }} ({{ $actor['age'] }} years old) {{ $actor['place_of_birth'] }}</span>
        </div>
        <p class="text-gray-300 mt-8">{{ $actor['biography'] }}</p>
        <h4 class="font-semibold mt-12">Known For</h4>
        <div id="known-for" class="owl-carousel owl-theme grid gap-8">
          @foreach ($knownFor as $item)
            <div class="item mt-4">
              <a href="{{ $item['link_to_route'] }}">
                <img src="{{ $item['poster_path'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
              <a href="{{ $item['link_to_route'] }}" class="text-sm text-center leading-normal block text-gray-400 hover:text-white mt-1">{{ $item['title'] }}</a>
            </div>
          @endforeach
        </div>
      </div>
    </div>

  </div>

  <div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Credits</h2>
      <ul class="list-disc leading-loose pl-5 mt-8">
        @foreach($credits as $credit)
          <li>{{ $credit['release_year'] }} &middot; <strong class="text-orange-500">{{ $credit['title'] }}</strong> {{ $credit['character'] !== '' ? 'as '.$credit['character'] : '' }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
  $("#known-for.owl-carousel").owlCarousel({
    nav: false,
    dots: true,
    items: 1,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayHoverPause: 1500,
    margin: 15,
    lazyLoadEager: 5,
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 3
      },
      1000:{
        items: 5
      }
    }
  })
  </script>
@endpush