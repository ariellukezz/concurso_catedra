<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\TipoTituloController;
use App\Http\Controllers\TituloController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoEstudioActualizacionController;
use App\Http\Controllers\TipoInvestigacionPublicacionController;
use App\Http\Controllers\InvestigacionPublicacionController;
use App\Http\Controllers\EstudioPosgradoController;
use App\Http\Middleware\verPaso;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () { 
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/about', fn () => Inertia::render('About'))->name('about');
    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('get-usuario', [UserController::class, 'getUsuario']);
Route::get('/datos-personales', fn () => Inertia::render('Publico/Registro/index'))->name('registro-datos_personales');
Route::get('/titulos', fn () => Inertia::render('Publico/Registro/titulos'))->name('registro-titulos');
Route::get('/estudios_actualizacion', fn () => Inertia::render('Publico/Registro/estudiosActualizaciones'))->name('registro_estudios_actualizacion');
Route::get('/investigaciones-publicaciones', fn () => Inertia::render('Publico/Registro/investigacionesPublicaciones'))->name('registro-investigaciones-publicaciones');
Route::get('/experiencia-no-docente', fn () => Inertia::render('Publico/Registro/experienciaNoDocente'))->name('registro-experiencia-no-docente');


//Route::get('/titulos', fn () => Inertia::render('Publico/Registro/titulos'))->name('registro-titulos');
//Route::get('/titulos', fn () => Inertia::render('Publico/Registro/titulos'))->name('registro-titulos');
//Route::get('/titulos', fn () => Inertia::render('Publico/Registro/titulos'))->name('registro-titulos');
//Route::get('/titulos', fn () => Inertia::render('Publico/Registro/titulos'))->name('registro-titulos');



Route::post('/save-candidato', [CandidatoController::class, 'Save']);
Route::get('/get-candidato', [CandidatoController::class, 'getCandidato']);
Route::get('/get-tipo-titulos', [TipoTituloController::class, 'selectTipoTitulos']);
Route::get('/get-tipo_estudio_actualizacion', [TipoEstudioActualizacionController::class, 'selectTipoEstudioActualizacion']);
Route::get('/get-tipo-investigacion-publicaicon', [TipoInvestigacionPublicacionController::class, 'selectTipoInvestigacionPublicacion']);




Route::post('/cargar-titulos', [TituloController::class, 'cargarTitulo']);
Route::get('/get-titulos-usuario', [TituloController::class, 'getTitulosUsuario']);
Route::get('/eliminar-titulo/{id}', [TituloController::class, 'eliminarTitulo']);


Route::post('/subir-estudios-posgrado', [EstudioPosgradoController::class, 'subirEstudios']);
Route::get('/get-estudios-usuario', [EstudioPosgradoController::class, 'getEstudios']);
Route::get('/eliminar-estudio/{id}', [EstudioPosgradoController::class, 'eliminarEstudio']); 


Route::post('/subir-publicaciones', [InvestigacionPublicacionController::class, 'subirPublicacion']);
Route::get('/get-publicaciones', [InvestigacionPublicacionController::class, 'getPublicaciones']);
Route::get('/eliminar-publicacion', [InvestigacionPublicacionController::class, 'eliminarPublicacion']);
Route::get('/eliminar-publicacion', [InvestigacionPublicacionController::class, 'eliminarPublicacion']);

// Route::get('/get-estudios-usuario', [EstudioPosgradoController::class, 'getEstudios']);
// Route::get('/eliminar-estudio/{id}', [EstudioPosgradoController::class, 'eliminarEstudio']); 


require __DIR__.'/auth.php';
