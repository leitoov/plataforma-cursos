@extends('layouts.admin')

@section('content')
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card p-3 border-start border-4 border-primary">
            <h6 class="text-secondary mb-1">Total Alumnos</h6>
            <h3 class="fw-bold mb-0">1,245</h3>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 border-start border-4 border-success">
            <h6 class="text-secondary mb-1">Cursos Activos</h6>
            <h3 class="fw-bold mb-0">12</h3>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 border-start border-4 border-warning">
            <h6 class="text-secondary mb-1">Ingresos (Mes)</h6>
            <h3 class="fw-bold mb-0">$4,500</h3>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">Constructor de Curso: "Desarrollo Web Fullstack"</h5>
        <button class="btn btn-primary btn-sm"><span class="material-icons-outlined fs-6 align-middle">add</span> Nuevo Módulo</button>
    </div>
    <div class="card-body p-4">
        <p class="text-secondary small mb-4"><span class="material-icons-outlined align-middle fs-6">info</span> Arrastra y suelta los módulos y clases para reordenarlos. Los cambios se guardarán automáticamente.</p>
        
        <!-- Contenedor Drag & Drop de Módulos -->
        <div id="modulesList">
            <!-- Módulo 1 -->
            <div class="border rounded p-3 mb-3 bg-light module-item">
                <div class="d-flex align-items-center mb-3">
                    <span class="material-icons-outlined drag-handle fs-4 me-2">drag_indicator</span>
                    <h5 class="mb-0 fw-bold flex-grow-1">Módulo 1: Introducción a HTML</h5>
                    <button class="btn btn-sm btn-outline-secondary me-2">Editar</button>
                    <button class="btn btn-sm btn-outline-danger"><span class="material-icons-outlined fs-6 align-middle">delete</span></button>
                </div>
                
                <!-- Items del Módulo 1 -->
                <div class="itemsList ps-5 pe-3">
                    <div class="bg-white border rounded p-2 mb-2 d-flex align-items-center shadow-sm">
                        <span class="material-icons-outlined drag-handle fs-5 me-3">drag_indicator</span>
                        <span class="material-icons-outlined text-primary me-2">play_circle</span>
                        <span class="flex-grow-1">1.1 ¿Qué es la web?</span>
                    </div>
                    <div class="bg-white border rounded p-2 mb-2 d-flex align-items-center shadow-sm">
                        <span class="material-icons-outlined drag-handle fs-5 me-3">drag_indicator</span>
                        <span class="material-icons-outlined text-primary me-2">play_circle</span>
                        <span class="flex-grow-1">1.2 Estructura básica de HTML</span>
                    </div>
                    <div class="bg-white border rounded p-2 mb-2 d-flex align-items-center shadow-sm">
                        <span class="material-icons-outlined drag-handle fs-5 me-3">drag_indicator</span>
                        <span class="material-icons-outlined text-danger me-2">picture_as_pdf</span>
                        <span class="flex-grow-1">1.3 Cheat Sheet de Etiquetas (PDF)</span>
                    </div>
                </div>
                <div class="ps-5 mt-2">
                    <button class="btn btn-sm btn-link text-decoration-none"><span class="material-icons-outlined fs-6 align-middle">add</span> Agregar Ítem</button>
                </div>
            </div>

            <!-- Módulo 2 -->
            <div class="border rounded p-3 mb-3 bg-light module-item">
                <div class="d-flex align-items-center mb-3">
                    <span class="material-icons-outlined drag-handle fs-4 me-2">drag_indicator</span>
                    <h5 class="mb-0 fw-bold flex-grow-1">Módulo 2: Estilos con CSS</h5>
                    <button class="btn btn-sm btn-outline-secondary me-2">Editar</button>
                    <button class="btn btn-sm btn-outline-danger"><span class="material-icons-outlined fs-6 align-middle">delete</span></button>
                </div>
                
                <!-- Items del Módulo 2 -->
                <div class="itemsList ps-5 pe-3">
                    <div class="bg-white border rounded p-2 mb-2 d-flex align-items-center shadow-sm">
                        <span class="material-icons-outlined drag-handle fs-5 me-3">drag_indicator</span>
                        <span class="material-icons-outlined text-primary me-2">play_circle</span>
                        <span class="flex-grow-1">2.1 Selectores y Clases</span>
                    </div>
                    <div class="bg-white border rounded p-2 mb-2 d-flex align-items-center shadow-sm">
                        <span class="material-icons-outlined drag-handle fs-5 me-3">drag_indicator</span>
                        <span class="material-icons-outlined text-success me-2">quiz</span>
                        <span class="flex-grow-1">Examen: Fundamentos CSS</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    // Inicializar Sortable para Módulos
    new Sortable(document.getElementById('modulesList'), {
        handle: '.drag-handle',
        animation: 150,
        ghostClass: 'sortable-ghost',
        onEnd: function (evt) {
            console.log('Módulo reordenado. Enviar AJAX...');
        }
    });

    // Inicializar Sortable para Ítems dentro de cada módulo
    document.querySelectorAll('.itemsList').forEach(function(el) {
        new Sortable(el, {
            group: 'shared', // Permite arrastrar items entre módulos
            handle: '.drag-handle',
            animation: 150,
            ghostClass: 'sortable-ghost',
            onEnd: function (evt) {
                console.log('Ítem movido. Enviar AJAX...');
            }
        });
    });
</script>
@endpush
