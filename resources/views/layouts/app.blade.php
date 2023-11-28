<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pujasera - @yield('pujasera')</title>
    <!-- Optional: Include CSS seperti Bootstrap jika diperlukan -->
     @vite('resources/css/app.css')
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
