<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pujasera - @yield('pujasera')</title>
    <!-- Optional: Include CSS seperti Bootstrap jika diperlukan -->
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Navigasi atau header -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer -->
    </footer>

    <!-- Optional: Include JavaScript seperti jQuery atau Bootstrap JS -->
    <script src="{{ asset('resources/js/app.js') }}"></script>
</body>
</html>
