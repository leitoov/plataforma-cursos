@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5 align-items-center">
        <div class="col-md-6">
            <h1 class="display-4 fw-bold mb-4">Aprende sin límites</h1>
            <p class="lead text-secondary mb-4">Desarrolla nuevas habilidades con nuestros cursos creados por expertos. Accede a contenido de primera calidad en cualquier momento y lugar.</p>
            <a href="#catalogo" class="btn btn-primary btn-lg px-4 py-3">Explorar Catálogo</a>
        </div>
        <div class="col-md-6 text-center">
            <!-- Placeholder para una imagen hero -->
            <div style="background: linear-gradient(135deg, #0056d2 0%, #00a0f0 100%); height: 350px; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white;">
                <span class="material-icons-outlined" style="font-size: 100px; opacity: 0.8;">school</span>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <div id="catalogo" class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold">Cursos Destacados</h2>
            <p class="text-secondary">Encuentra el programa perfecto para ti.</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Curso 1 -->
        <div class="col-md-4">
            <div class="card course-card h-100">
                <div class="card-img-top d-flex align-items-center justify-content-center text-secondary">
                    <span class="material-icons-outlined" style="font-size: 64px;">code</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 align-self-start">Programación</span>
                    <h5 class="card-title fw-bold">Desarrollo Web Fullstack</h5>
                    <p class="card-text text-secondary small">Aprende HTML, CSS, JS, Laravel y React desde cero hasta avanzado.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-bold fs-5">$49.99 USD</span>
                            <span class="text-secondary small d-flex align-items-center"><span class="material-icons-outlined fs-6 me-1">star</span> 4.8</span>
                        </div>
                        <a href="/courses/1" class="btn btn-outline-primary w-100">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Curso 2 -->
        <div class="col-md-4">
            <div class="card course-card h-100">
                <div class="card-img-top d-flex align-items-center justify-content-center text-secondary">
                    <span class="material-icons-outlined" style="font-size: 64px;">design_services</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 align-self-start">Diseño</span>
                    <h5 class="card-title fw-bold">UI/UX Design Masterclass</h5>
                    <p class="card-text text-secondary small">Crea interfaces hermosas y funcionales aplicando las mejores prácticas.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-bold fs-5">¡Gratis!</span>
                            <span class="text-secondary small d-flex align-items-center"><span class="material-icons-outlined fs-6 me-1">star</span> 4.9</span>
                        </div>
                        <a href="/courses/2" class="btn btn-outline-primary w-100">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Curso 3 -->
        <div class="col-md-4">
            <div class="card course-card h-100">
                <div class="card-img-top d-flex align-items-center justify-content-center text-secondary">
                    <span class="material-icons-outlined" style="font-size: 64px;">insights</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 align-self-start">Negocios</span>
                    <h5 class="card-title fw-bold">Marketing Digital 360</h5>
                    <p class="card-text text-secondary small">Estrategias de crecimiento, SEO, SEM y redes sociales.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-bold fs-5">$29.99 USD</span>
                            <span class="text-secondary small d-flex align-items-center"><span class="material-icons-outlined fs-6 me-1">star</span> 4.7</span>
                        </div>
                        <a href="/courses/3" class="btn btn-outline-primary w-100">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
