@extends('layouts.app')

@section('content')
<div class="container py-4 fade-in">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Mis Cursos</h2>
        <span class="badge bg-primary px-3 py-2 fs-6">2 En curso</span>
    </div>

    <div class="row g-4">
        <!-- Curso 1 -->
        <div class="col-md-6">
            <div class="card course-card h-100 flex-row">
                <div class="bg-primary text-white d-flex align-items-center justify-content-center flex-shrink-0" style="width: 150px; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                    <span class="material-icons-outlined" style="font-size: 50px;">code</span>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">Desarrollo Web Fullstack</h5>
                    <p class="text-secondary small mb-3">Módulo actual: Estilos con CSS</p>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-secondary mb-1">
                            <span>Progreso</span>
                            <span class="fw-bold text-dark">45%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%;"></div>
                        </div>
                    </div>
                    
                    <a href="/learn/course/1/module/1/item/1" class="btn btn-primary btn-sm w-100 fw-bold">Continuar Aprendiendo</a>
                </div>
            </div>
        </div>

        <!-- Curso 2 -->
        <div class="col-md-6">
            <div class="card course-card h-100 flex-row">
                <div class="bg-dark text-white d-flex align-items-center justify-content-center flex-shrink-0" style="width: 150px; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                    <span class="material-icons-outlined" style="font-size: 50px;">design_services</span>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">UI/UX Design Masterclass</h5>
                    <p class="text-secondary small mb-3">Módulo actual: Principios de Gestalt</p>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-secondary mb-1">
                            <span>Progreso</span>
                            <span class="fw-bold text-dark">12%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 12%;"></div>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-outline-primary btn-sm w-100 fw-bold">Continuar Aprendiendo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
