<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- CSS Utama Admin --}}
    <link rel="stylesheet" href="/css/admin.css">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

<div class="admin-wrapper">

            {{-- Tombol logout --}}
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="sidebar-nav-list-logout-btn">Logout</button>
                </form>
            </li>
        </ul>
    </aside>

    {{-- ===================== --}}
    {{-- MAIN CONTENT --}}
    {{-- ===================== --}}
    <main class="admin-content">
        @yield('content')
    </main>

</div> {{-- END WRAPPER --}}

</body>
</html>

{{-- CSS Tambahan Logout --}}
<style>
.sidebar-nav-list-logout-btn {
    width: 100%;
    text-align: left;
    background: none;
    border: none;
    cursor: pointer;
    padding: 12px 15px;
    border-radius: 5px;
    color: var(--sidebar-text);
    font-weight: 500;
    font-size: 1rem;
    font-family: inherit;
    transition: 0.3s ease;
}

.sidebar-nav-list-logout-btn:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
}
</style>
