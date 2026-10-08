<?php

use Illuminate\Support\Facades\Route;

// ==== FRONTEND PÚBLICO ====
// Catálogo de Cursos
Route::get('/', function () {
    return view('welcome');
});

// Detalle de un curso
Route::get('/courses/{id}', function ($id) {
    return view('courses.show', ['id' => $id]);
});

// ==== AUTENTICACIÓN ====
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


// ==== ÁREA DE ALUMNO ====
Route::prefix('learn')->group(function () {
    
    // Visor del curso (donde se ven los videos/textos)
    Route::get('/course/{courseId}/module/{moduleId}/item/{itemId}', function ($courseId, $moduleId, $itemId) {
        return view('learn.viewer', compact('courseId', 'moduleId', 'itemId'));
    });

    // Mis Cursos (Dashboard del alumno)
    Route::get('/my-courses', function () {
        return view('user.my_courses');
    });
});


// ==== ÁREA DE ADMINISTRACIÓN ====
Route::prefix('admin')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/courses', function () {
        return view('layouts.admin')->with('content', '<div class="alert alert-info mt-4"><h3>Sección de Cursos</h3>Aquí se listarán todos los cursos de la base de datos para editarlos.</div>');
    });

    Route::get('/students', function () {
        return view('layouts.admin')->with('content', '<div class="alert alert-info mt-4"><h3>Sección de Alumnos</h3>Aquí podrás ver el progreso y bloquear/desbloquear estudiantes.</div>');
    });

    Route::get('/payments', function () {
        return view('layouts.admin')->with('content', '<div class="alert alert-info mt-4"><h3>Pagos y Promociones</h3>Aquí configurarás MercadoPago/PayPal y los cupones de descuento.</div>');
    });

    Route::get('/settings', function () {
        return view('layouts.admin')->with('content', '<div class="alert alert-info mt-4"><h3>Configuración</h3>Ajustes globales de la plataforma.</div>');
    });

});

