<!DOCTYPE html>
<html>
<head>
    <title>Housing MIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Leaflet CSS (working, without integrity) -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />

<!-- Leaflet JS (working, without integrity) -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.navigation')

    <main>
        @yield('content')
    </main>

    @stack('scripts') <!-- ✅ This allows page-specific scripts like your map JS -->
</body>
</html>
