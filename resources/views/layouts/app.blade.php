<!doctype html>
<html lang="en">
    <head>
        @include('partials.meta')
        @include('partials.style')
        <title>Mappo</title>
    </head>
    <body>
        @include('partials.navbar')
        <div class="container mt-4">
            @yield('container')
        </div>


        @include('partials.script')
        @stack('scripts')
    </body>
</html>
