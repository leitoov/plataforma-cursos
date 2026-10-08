<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visor de Clase - LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; overflow: hidden; }
        .viewer-navbar { background-color: #1a1d20; color: white; height: 60px; }
        .viewer-sidebar { width: 350px; background-color: white; border-right: 1px solid #e9ecef; height: calc(100vh - 60px); overflow-y: auto; }
        .viewer-content { flex-grow: 1; height: calc(100vh - 60px); overflow-y: auto; background-color: #f8f9fa; }
        .module-header { background-color: #f1f3f5; padding: 15px; font-weight: bold; font-size: 14px; border-bottom: 1px solid #e9ecef; cursor: pointer; }
        .item-row { padding: 12px 15px; border-bottom: 1px solid #f1f3f5; cursor: pointer; transition: 0.2s; display: flex; align-items: center; }
        .item-row:hover { background-color: #f8f9fa; }
        .item-row.active { background-color: #e7f1ff; border-left: 4px solid #0d6efd; }
        .video-container { width: 100%; max-width: 900px; margin: 0 auto; background: black; aspect-ratio: 16/9; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="d-flex flex-column">

    <!-- Header -->
    <div class="viewer-navbar d-flex align-items-center px-4 justify-content-between shadow-sm">
        <div class="d-flex align-items-center">
            <a href="/learn/my-courses" class="text-white text-decoration-none me-4"><span class="material-icons-outlined align-middle">arrow_back</span></a>
            <h5 class="mb-0 fw-bold">Desarrollo Web Fullstack</h5>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-secondary me-3 small">Progreso: 45%</span>
            <div class="progress" style="width: 150px; height: 6px; background-color: #333;">
                <div class="progress-bar bg-success" style="width: 45%;"></div>
            </div>
        </div>
    </div>

    <!-- Main -->
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="viewer-sidebar">
            <div class="p-3 border-bottom">
                <h6 class="fw-bold mb-0">Contenido del Curso</h6>
            </div>
            
            <!-- Module 1 -->
            <div class="module-header d-flex justify-content-between align-items-center">
                <span>1. Introducción a HTML</span>
                <span class="material-icons-outlined fs-5">expand_less</span>
            </div>
            <div>
                <div class="item-row">
                    <span class="material-icons-outlined text-success fs-5 me-2">check_circle</span>
                    <span class="small">1.1 ¿Qué es la web?</span>
                </div>
                <div class="item-row active">
                    <span class="material-icons-outlined text-primary fs-5 me-2">play_circle</span>
                    <span class="small fw-bold text-dark">1.2 Estructura básica de HTML</span>
                </div>
                <div class="item-row text-secondary">
                    <span class="material-icons-outlined fs-5 me-2">picture_as_pdf</span>
                    <span class="small">1.3 Cheat Sheet de Etiquetas</span>
                </div>
            </div>

            <!-- Module 2 -->
            <div class="module-header d-flex justify-content-between align-items-center mt-2">
                <span>2. Estilos con CSS</span>
                <span class="material-icons-outlined fs-5">expand_more</span>
            </div>
        </div>

        <!-- Content Area -->
        <div class="viewer-content p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4 max-w-900 mx-auto" style="max-width: 900px;">
                <h3 class="fw-bold mb-0">1.2 Estructura básica de HTML</h3>
                <button class="btn btn-outline-success btn-sm fw-bold"><span class="material-icons-outlined align-middle fs-6 me-1">check</span> Marcar Completado</button>
            </div>
            
            <div class="video-container mb-5">
                <!-- Simulando un Iframe de YouTube -->
                <div class="w-100 h-100 d-flex justify-content-center align-items-center bg-dark text-white">
                    <span class="material-icons-outlined" style="font-size: 80px; opacity: 0.8; cursor: pointer;">play_arrow</span>
                </div>
            </div>

            <div style="max-width: 900px; margin: 0 auto;">
                <h4 class="fw-bold border-bottom pb-2 mb-3">Descripción de la clase</h4>
                <p class="text-secondary">En esta clase aprenderemos las etiquetas base obligatorias para cualquier documento HTML5 válido: html, head, body, title y meta. También veremos cómo enlazar archivos externos.</p>
                
                <h4 class="fw-bold border-bottom pb-2 mb-3 mt-5">Comentarios (2)</h4>
                <!-- Comentario 1 -->
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Ana&background=random" class="rounded-circle" width="40" alt="...">
                    </div>
                    <div class="ms-3 bg-white p-3 rounded shadow-sm w-100">
                        <h6 class="fw-bold mb-1">Ana Gómez <span class="text-secondary small fw-normal ms-2">Hace 2 horas</span></h6>
                        <p class="mb-0 text-secondary small">¡Excelente explicación! Me quedó muy claro el uso de la etiqueta meta viewport.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
