<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde se registran las rutas web para la aplicación AG Empresas.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo
| que contiene el grupo de middleware "web".
|
*/

// Ruta principal que carga el frontend replica de Empresas LN
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta para la sub-página de AG Servicios
Route::get('/servicios', [HomeController::class, 'servicios'])->name('servicios');

// Ruta para la sub-página de Quiénes Somos (Historia, Directorio, Sostenibilidad)
Route::get('/quienes-somos', [HomeController::class, 'quienesSomos'])->name('quienes-somos');

// Ruta para el envío del formulario de contacto mediante AJAX con protección CSRF
Route::post('/contacto', [HomeController::class, 'submitContact'])->name('contact.submit');
