<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnish - @yield('title', 'Home')</title>
    @vite(['resources/scss/theme.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        </footer>
</body>
</html>