<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Klinik Digital</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .nav-link {
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        main {
            min-height: 80vh;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('sistem.index') }}">
                🏥 Klinik Digital
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sistem.index') ? 'active fw-bold' : '' }}" 
                           href="{{ route('sistem.index') }}">
                           Daftar Pasien
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sistem.create') ? 'active fw-bold' : '' }}" 
                           href="{{ route('sistem.create') }}">
                           Tambah Pasien
                        </a>
                    </li>
                </ul>

                <!-- Kanan Navbar -->
                <span class="text-white small">
                    Sistem Manajemen Klinik
                </span>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="container">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer>
        © {{ date('Y') }} Klinik Digital | Dibuat dengan Laravel & Bootstrap
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>