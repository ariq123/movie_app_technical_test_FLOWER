<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🎬</text></svg>">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body.bg-main {
            background-color: #1a1a1a;
            color: #fff;
            overflow-x: hidden;
        }

        .navbar {
            transition: background-color 0.3s ease-in-out, padding 0.3s;
        }

        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.95) !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .dropdown-menu {
            background-color: #333;
            border: 1px solid #444;
        }

        .dropdown-item {
            color: #fff;
        }

        .dropdown-item:hover {
            background-color: #e50914;
            color: #fff;
        }

    </style>
</head>

<body class="bg-main">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="/movies">
                🎬 {{ __('app.movies') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle btn btn-dark" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-globe"></i> {{ __('app.language') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="{{ route('change.language', ['lang' => 'en']) }}">🇺🇸
                                English</a>
                            <a class="dropdown-item" href="{{ route('change.language', ['lang' => 'id']) }}">🇮🇩
                                Indonesia</a>
                        </div>
                    </li>

                    <li class="nav-item mr-2">
                        <a href="/favorites" class="btn btn-warning btn-sm">
                            <i class="fas fa-star"></i> {{ __('app.favorite') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/logout" class="btn btn-danger btn-sm">
                            <i class="fas fa-sign-out-alt"></i> {{ __('app.logout') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px; min-height: 80vh;">
        @yield('content')
    </div>

    <footer class="text-center py-4 text-muted small mt-5">
        &copy; {{ date('Y') }} Movie App. All rights reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // 1. Init AOS
            AOS.init({
                once: true
                , duration: 800
                , offset: 100
            });

            // 2. Navbar Scroll Effect
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // 3. Toast Notifications
            @if(session('success'))
            showToast("{{ session('success') }}", "success");
            @endif

            @if(session('error'))
            showToast("{{ session('error') }}", "error");
            @endif

            @if(session('notification'))
            showToast("{{ session('notification') }}", "info");
            @endif
        });

    </script>
</body>

</html>

</body>

</html>
