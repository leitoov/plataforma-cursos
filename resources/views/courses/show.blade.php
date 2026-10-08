@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-dark text-white py-5 fade-in">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-primary mb-3">Programación</span>
                <h1 class="display-4 fw-bold mb-3">Desarrollo Web Fullstack</h1>
                <p class="lead mb-4 opacity-75">Aprende HTML, CSS, JS, Laravel y React desde cero hasta avanzado. Construye proyectos reales y crea tu portafolio profesional.</p>
                <div class="d-flex align-items-center small mb-2">
                    <span class="material-icons-outlined text-warning me-1">star</span>
                    <span class="fw-bold me-1">4.8</span>
                    <span class="opacity-75">(2,450 valoraciones) • 15,200 estudiantes</span>
                </div>
                <div class="d-flex align-items-center small opacity-75">
                    <span class="material-icons-outlined fs-6 me-1">language</span> Español
                    <span class="material-icons-outlined fs-6 ms-3 me-1">schedule</span> 45 horas de video
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 fade-in">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8 pe-lg-5">
            <h3 class="fw-bold mb-4">Lo que aprenderás</h3>
            <div class="card bg-light border-0 mb-5">
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6 d-flex">
                            <span class="material-icons-outlined text-primary me-2">check</span>
                            <span class="small">Dominar HTML5, CSS3 y JavaScript moderno (ES6+).</span>
                        </div>
                        <div class="col-md-6 d-flex">
                            <span class="material-icons-outlined text-primary me-2">check</span>
                            <span class="small">Crear aplicaciones Backend robustas con Laravel 11.</span>
                        </div>
                        <div class="col-md-6 d-flex">
                            <span class="material-icons-outlined text-primary me-2">check</span>
                            <span class="small">Construir interfaces interactivas con React.js.</span>
                        </div>
                        <div class="col-md-6 d-flex">
                            <span class="material-icons-outlined text-primary me-2">check</span>
                            <span class="small">Desplegar tus aplicaciones en servidores reales.</span>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="fw-bold mb-4">Contenido del Curso</h3>
            <div class="accordion mb-5" id="courseContent">
                <!-- Módulo 1 -->
                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mod1">
                            1. Introducción a HTML
                        </button>
                    </h2>
                    <div id="mod1" class="accordion-collapse collapse show" data-bs-parent="#courseContent">
                        <div class="accordion-body p-0 py-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 small text-secondary">
                                    <span><span class="material-icons-outlined align-middle fs-6 me-2">play_circle</span> 1.1 ¿Qué es la web?</span>
                                    <span>10:35</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 small text-secondary">
                                    <span><span class="material-icons-outlined align-middle fs-6 me-2">play_circle</span> 1.2 Estructura básica de HTML</span>
                                    <span>15:20</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Pricing/CTA -->
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 sticky-top" style="top: 20px; margin-top: -100px;">
                <div class="card-img-top bg-secondary" style="height: 200px; display:flex; align-items:center; justify-content:center;">
                    <span class="material-icons-outlined text-white" style="font-size: 64px;">play_circle</span>
                </div>
                <div class="card-body p-4">
                    <h2 class="fw-bold mb-3">$49.99 <span class="fs-6 text-decoration-line-through text-secondary fw-normal">$99.99</span></h2>
                    
                    <button class="btn btn-primary w-100 py-3 fw-bold mb-2">Comprar ahora</button>
                    <p class="text-center text-secondary small mb-4">Garantía de reembolso de 30 días</p>
                    
                    <h6 class="fw-bold mb-3">Este curso incluye:</h6>
                    <ul class="list-unstyled small text-secondary">
                        <li class="mb-2"><span class="material-icons-outlined fs-6 align-middle me-2">ondemand_video</span> 45 horas de video bajo demanda</li>
                        <li class="mb-2"><span class="material-icons-outlined fs-6 align-middle me-2">description</span> 25 recursos descargables</li>
                        <li class="mb-2"><span class="material-icons-outlined fs-6 align-middle me-2">all_inclusive</span> Acceso de por vida</li>
                        <li class="mb-2"><span class="material-icons-outlined fs-6 align-middle me-2">emoji_events</span> Certificado de finalización</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
