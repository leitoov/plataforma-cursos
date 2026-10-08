@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card border-0 shadow-lg fade-in" style="width: 100%; max-width: 600px; border-radius: 12px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <span class="material-icons-outlined text-primary" style="font-size: 48px;">person_add</span>
                <h2 class="fw-bold mt-2">Crea tu cuenta</h2>
                <p class="text-secondary">Únete para empezar a aprender sin límites</p>
            </div>
            
            <form action="#" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-secondary small fw-bold">Nombre</label>
                        <input type="text" class="form-control bg-light" placeholder="Ej. Juan" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-secondary small fw-bold">Apellido</label>
                        <input type="text" class="form-control bg-light" placeholder="Ej. Pérez" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-secondary small fw-bold">DNI / Documento</label>
                        <input type="text" class="form-control bg-light" placeholder="Número de identidad" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-secondary small fw-bold">Fecha de Nacimiento</label>
                        <input type="date" class="form-control bg-light" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label text-secondary small fw-bold">Correo Electrónico</label>
                    <input type="email" class="form-control bg-light" placeholder="tu@email.com" required>
                </div>
                
                <div class="mb-4">
                    <label class="form-label text-secondary small fw-bold">Contraseña</label>
                    <input type="password" class="form-control bg-light" placeholder="Mínimo 8 caracteres" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold mb-3">Registrarme</button>
                
                <div class="text-center">
                    <p class="text-secondary small mb-0">¿Ya tienes cuenta? <a href="/login" class="text-decoration-none fw-bold">Inicia sesión</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
