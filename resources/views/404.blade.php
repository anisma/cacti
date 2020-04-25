<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Page Not Found</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="not-found-page">
                <span class="oh-no">Oh, no!</span>
               <div class="bottom">
                   <p>Page not found.</p>
                   <p>it may have been moved or you just entered page address incorrectly.</p>
                   <hr>
                   <span class="btn btn-404">back to homepage</span>
               </div>
            </div>
        </main>
    </div>
</body>
</html>
