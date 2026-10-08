<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Cursos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- Custom CSS para estilo Coursera -->
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
            color: #111827;
        }
        /* Navbar Premium UX */
        .navbar-premium {
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            border-bottom: 1px solid #f3f4f6;
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        .navbar-brand {
            font-weight: 800;
            color: #000000 !important;
            letter-spacing: -0.5px;
            font-size: 1.4rem;
        }
        .navbar-brand .brand-dot { color: #2563eb; }
        
        .nav-link-custom {
            color: #4b5563;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.5rem 1rem !important;
            transition: color 0.2s ease;
        }
        .nav-link-custom:hover { color: #111827; }
        
        /* Search Bar */
        .search-container {
            position: relative;
            max-width: 400px;
            width: 100%;
        }
        .search-input {
            background-color: #f3f4f6;
            border: 1px solid transparent;
            border-radius: 9999px;
            padding: 0.6rem 1.2rem 0.6rem 2.8rem;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            width: 100%;
        }
        .search-input:focus {
            background-color: #ffffff;
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            outline: none;
        }
        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
            font-size: 1.2rem;
        }

        /* Buttons */
        .btn-premium-outline {
            color: #111827;
            background-color: transparent;
            border: 1px solid #d1d5db;
            border-radius: 9999px;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            transition: all 0.2s;
        }
        .btn-premium-outline:hover {
            background-color: #f9fafb;
            border-color: #9ca3af;
        }
        .btn-premium {
            color: #ffffff;
            background-color: #2563eb;
            border: none;
            border-radius: 9999px;
            font-weight: 600;
            padding: 0.55rem 1.5rem;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
            transition: all 0.2s;
        }
        .btn-premium:hover {
            background-color: #1d4ed8;
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.3);
            transform: translateY(-1px);
        }

        /* Utilidades UX */
        .fade-in { animation: fadeIn 0.5s ease-out forwards; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-premium sticky-top">
        <div class="container-fluid px-4 px-lg-5">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center me-4" href="/">
                PLATAFORMA<span class="brand-dot">.</span>
            </a>

            <!-- Search (Solo visible en Desktop, en medio) -->
            <div class="search-container d-none d-lg-block me-auto">
                <span class="material-icons-outlined search-icon">search</span>
                <input type="text" class="search-input" placeholder="¿Qué quieres aprender hoy?">
            </div>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="material-icons-outlined">menu</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center mt-4 mt-lg-0">
                    @auth
                    <!-- Opciones de Usuario Logueado -->
                    <li class="nav-item mb-3 mb-lg-0 me-lg-3">
                        <a class="nav-link-custom text-decoration-none fw-bold text-primary" href="/learn/my-courses">Mis Cursos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="d-flex align-items-center text-dark text-decoration-none" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=User&background=2563eb&color=fff" class="rounded-circle" width="38" height="38" alt="Perfil">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg mt-2" style="border-radius: 12px;">
                            <li><a class="dropdown-item py-2 fw-medium" href="#"><span class="material-icons-outlined align-middle fs-6 me-2">person</span> Mi Perfil</a></li>
                            <li><a class="dropdown-item py-2 fw-medium" href="#"><span class="material-icons-outlined align-middle fs-6 me-2">settings</span> Ajustes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item py-2 fw-medium text-danger" href="#"><span class="material-icons-outlined align-middle fs-6 me-2">logout</span> Cerrar sesión</a></li>
                        </ul>
                    </li>
                    @endauth

                    @guest
                    <!-- Botones de Autenticación -->
                    <li class="nav-item mb-2 mb-lg-0 ms-lg-2">
                        <a class="btn btn-premium-outline w-100 d-block d-lg-inline-block text-center" href="/login">Ingresar</a>
                    </li>
                    <li class="nav-item mb-2 mb-lg-0 ms-lg-3">
                        <a class="btn btn-premium w-100 d-block d-lg-inline-block text-center" href="/register">Inscribirme ahora</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Plataforma LMS. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
