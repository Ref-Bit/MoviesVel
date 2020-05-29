<div class="relative" x-data="{isOpen: true }" @click.away="isOpen=false">
  <input
   wire:model.debounce.500ms="search"
   @keydown.escape.window="isOpen=false"
   @keydown="isOpen=true"
   @keydown.shift.tab="isOpen=false"
   @focus="isOpen=true"
   type="text" 
   class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
   placeholder="Search Movies"
   >
  <div class="absolute top-0">
      <svg class="fill-current text-gray-500 w-4 mt-1 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
  </div>
  <div wire:loading class="spinner"></div>
  @if (strlen($search) >= 2)
  <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4 z-50"
       x-show.transition.opacity="isOpen"
       >
    <ul>
      @forelse ($results as $result)
        <li class="border-b border-gray-700">
          <a 
            href="{{ route('movies.show', $result['id']) }}"
            class="block hover:bg-gray-700 p-3 flex items-center"
            @if ($loop->last) @keydown.tab="isOpen=false" @endif
            >
            @if ($result['poster_path'])  
              <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="{{$result['title']}}-Poster" class="w-8">
            @else
              <img src="https://via.placeholder.com/50x75" alt="Poster" class="w-8">
            @endif
            <span class="ml-2">{{ $result['title'] }}</span>
          </a>
        </li>
      @empty
        <li class="p-3">No results for {{ $search }}</li>
      @endforelse
    </ul>
  </div>
  @endif
</div>
