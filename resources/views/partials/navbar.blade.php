<nav class="border-b border-gray-800">
  <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between px-4 py-6">
    <ul class="flex flex-col md:flex-row items-center">
      <li>
        <a href="{{ route('movies.index') }}" class="flex items-center">
          <svg id="Capa_1" enable-background="new 0 0 512 512" height="48" viewBox="0 0 512 512" width="48" xmlns="http://www.w3.org/2000/svg"><g><path d="m324.745 0h-128.745-75v90h75 165c66.167 0 121 54.833 121 121 0 62.373-47.758 113.73-109.765 119.473l-21.445 58.374 4.951 29.59c89.971-15.088 156.259-92.33 156.259-183.692v-47.49c0-102.7-84.555-187.255-187.255-187.255z" fill="#474f54"/><path d="m482 211c0 62.373-47.758 113.73-109.765 119.473l-21.445 58.374 4.951 29.59c89.971-15.088 156.259-92.33 156.259-183.692v-47.49c0-102.7-84.555-187.255-187.255-187.255h-128.745v90h165c66.167 0 121 54.833 121 121z" fill="#32393f"/><path d="m196 120c-107.401 0-196 88.599-196 196s88.599 196 196 196 195-88.599 195-196-87.599-196-195-196z" fill="#fff7e6"/><path d="m391 316c0 107.401-87.599 196-195 196v-392c107.401 0 195 88.599 195 196z" fill="#ffe6cc"/><path d="m241 30h60v30h-60z" fill="#ff9100"/><path d="m361 60h-30v-29.652c44.899 1.793 85.038 22.399 112.441 54.393-23.671-15.63-52.016-24.741-82.441-24.741z" fill="#ff9100"/><path d="m196 30h-45v30h45 15v-30z" fill="#fabe2c"/><path d="m196 30h15v30h-15z" fill="#ff9100"/><path d="m106 361c-24.814 0-46-20.186-46-45s21.186-45 46-45 45 20.186 45 45-20.186 45-45 45z" fill="#474f54"/><path d="m286 361c-24.814 0-45-20.186-45-45s20.186-45 45-45 45 20.186 45 45-20.186 45-45 45z" fill="#32393f"/><g fill="#474f54"><path d="m196 181c-24.901 0-45 20.099-45 45s20.099 45 45 45 45-20.099 45-45-20.099-45-45-45z"/><path d="m196 361c-24.901 0-45 20.099-45 45s20.099 45 45 45 45-20.099 45-45-20.099-45-45-45z"/><path d="m181 301h30v30h-30z"/></g><path d="m241 406c0 24.901-20.099 45-45 45v-90c24.901 0 45 20.099 45 45z" fill="#32393f"/><path d="m196 271v-90c24.901 0 45 20.099 45 45s-20.099 45-45 45z" fill="#32393f"/><path d="m196 301h15v30h-15z" fill="#32393f"/></g></svg>
          <span class="text-2xl ml-2">{{ config('app.name') }}</span>
        </a>
      </li>
      <li class="md:ml-16 mt-3 md:mt-0">
        <a href="{{ route('movies.index') }}" class="hover:text-gray-3000">Movies</a>
      </li>
      <li class="md:ml-6 mt-3 md:mt-0">
        <a href="#" class="hover:text-gray-3000">TV Shows</a>
      </li>
      <li class="md:ml-6 mt-3 md:mt-0">
        <a href="#" class="hover:text-gray-3000">Actors</a>
      </li>
    </ul>
    <div class="flex items-center justify-center mt-3 md:mt-0">
      <livewire:search-dropdown>
      <div class="ml-4">
        <a href="#">
          <img src="{{ asset('img/avatar.png') }}" alt="Avatar" class="rounded-full w-8 h-8">
        </a>
      </div>
    </div>
  </div>
</nav>