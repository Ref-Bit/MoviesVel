<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }} ">
  <livewire:styles>
  <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
  <title>MoviesVel</title>
</head>
<body class="font-jost bg-gray-900 text-white">

  @include('partials.navbar')
  
  @yield('content')

  @include('partials.footer')

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
  <livewire:scripts>
</body>
</html>