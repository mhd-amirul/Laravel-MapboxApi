<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.style')

    <title>Laravel Blog</title>
  </head>
  <body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
        {{ isset($slot) ? $slot : null }}
    </div>


    @include('partials.script')
    @stack('scripts')
  </body>
</html>
