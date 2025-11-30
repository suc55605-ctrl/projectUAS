<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Alumni')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/landing.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Sistem Alumni</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#section-berita" class="nav-link">Berita</a></li>
                <li class="nav-item"><a href="#section-lowongan" class="nav-link">Lowongan</a></li>

                @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link btn btn-primary text-white ms-2">Login Admin</a>
                    </li>
                @endguest

                @auth
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="/admin/dashboard" class="nav-link btn btn-success text-white ms-2">Dashboard</a>
                        </li>
                       <li class="nav-item">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="nav-link btn btn-danger text-white ms-2" style="border: none;">
            Logout
        </button>
    </form>
</li>

                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div style="margin-top: 70px;"></div>

<!-- CONTENT -->
<div class="container py-4">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="text-center bg-dark text-white p-3 mt-5">
    <small>© 2025 Sistem Informasi Alumni – Semua Hak Dilindungi</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

