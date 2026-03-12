<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoDrive - Premium Car Showroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', sans-serif; }
        .navbar { background: #1a1a2e; }
        .navbar-brand { color: #e94560 !important; font-weight: bold; font-size: 1.5rem; }
        .nav-link { color: white !important; }
        .nav-link:hover { color: #e94560 !important; }
        footer { background: #1a1a2e; color: white; padding: 20px 0; margin-top: 50px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">🚗 AutoDrive</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/cars">Cars</a>
                <a class="nav-link" href="/about">About</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-center">
        <p>© 2026 AutoDrive. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>