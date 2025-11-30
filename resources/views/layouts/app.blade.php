<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Alumni</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    {{-- pakai navbar dari landing --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Sistem Alumni</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
                    <li class="nav-item"><a href="/lowongan" class="nav-link">Lowongan</a></li>

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
                                <a href="/logout" class="nav-link btn btn-danger text-white ms-2">Logout</a>
                            </li>
                        @endif
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <div style="margin-top: 90px;">
        @yield('content')
    </div>

    <footer class="text-center bg-dark text-white p-3 mt-5">
        <small>© 2025 Sistem Informasi Alumni – Semua Hak Dilindungi</small>
    </footer>

</body>
</html>
