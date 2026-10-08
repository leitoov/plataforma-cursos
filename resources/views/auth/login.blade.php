@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card border-0 shadow-lg fade-in" style="width: 100%; max-width: 450px; border-radius: 12px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <span class="material-icons-outlined text-primary" style="font-size: 48px;">account_circle</span>
                <h2 class="fw-bold mt-2">Iniciar Sesión</h2>
                <p class="text-secondary">Bienvenido de nuevo a la plataforma</p>
            </div>
            
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-secondary small fw-bold">Correo Electrónico</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><span class="material-icons-outlined fs-5">email</span></span>
                        <input type="email" class="form-control bg-light border-start-0 ps-0" placeholder="tu@email.com" required>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <label class="form-label text-secondary small fw-bold">Contraseña</label>
                        <a href="#" class="text-decoration-none small">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><span class="material-icons-outlined fs-5">lock</span></span>
                        <input type="password" class="form-control bg-light border-start-0 ps-0" placeholder="••••••••" required>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold mb-3">Ingresar</button>
                
                <div class="text-center">
                    <p class="text-secondary small mb-0">¿No tienes cuenta? <a href="/register" class="text-decoration-none fw-bold">Regístrate aquí</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
