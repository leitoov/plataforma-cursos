<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Plataforma LMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }
        .sidebar { min-height: 100vh; background-color: #1e1e2d; color: #a2a3b7; }
        .sidebar a { color: #a2a3b7; text-decoration: none; padding: 10px 15px; display: block; border-radius: 6px; margin-bottom: 5px; transition: 0.2s; }
        .sidebar a:hover, .sidebar a.active { background-color: #1b1b28; color: #fff; }
        .sidebar a .material-icons-outlined { vertical-align: middle; margin-right: 10px; }
        .topbar { background-color: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.02); padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        .admin-content { padding: 30px; }
        .card { border: none; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.03); }
        .drag-handle { cursor: grab; color: #adb5bd; }
        .drag-handle:active { cursor: grabbing; }
        /* Sortable placeholder style */
        .sortable-ghost { opacity: 0.4; background-color: #f8f9fa; }
    </style>
</head>
<body class="d-flex">
    
    <!-- Sidebar -->
    <div class="sidebar p-3" style="width: 260px;">
        <h4 class="text-white text-center py-3 mb-4 fw-bold">Admin Panel</h4>
        <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><span class="material-icons-outlined">dashboard</span> Dashboard</a>
        <a href="/admin/courses" class="{{ request()->is('admin/courses') ? 'active' : '' }}"><span class="material-icons-outlined">school</span> Cursos</a>
        <a href="/admin/students" class="{{ request()->is('admin/students') ? 'active' : '' }}"><span class="material-icons-outlined">people</span> Alumnos</a>
        <a href="/admin/payments" class="{{ request()->is('admin/payments') ? 'active' : '' }}"><span class="material-icons-outlined">payments</span> Pagos y Promociones</a>
        <a href="/admin/settings" class="{{ request()->is('admin/settings') ? 'active' : '' }}"><span class="material-icons-outlined">settings</span> Configuración</a>
        
        <div class="mt-5 text-center">
            <a href="/" class="btn btn-outline-secondary btn-sm w-100 text-white border-secondary"><span class="material-icons-outlined fs-6">logout</span> Volver al sitio</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 d-flex flex-column" style="height: 100vh; overflow-y: auto;">
        <div class="topbar">
            <h5 class="mb-0 fw-bold text-dark">Gestión de Cursos (Drag & Drop)</h5>
            <div class="d-flex align-items-center">
                <span class="material-icons-outlined text-secondary me-3">notifications</span>
                <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" class="rounded-circle" width="35" height="35" alt="Admin">
            </div>
        </div>

        <div class="admin-content">
            @if(isset($content))
                {!! $content !!}
            @else
                @yield('content')
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    @stack('scripts')
</body>
</html>
