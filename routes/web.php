<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\DescripcionController;
use App\Http\Controllers\TipoTituloController;
use App\Http\Controllers\TituloController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoEstudioActualizacionController;
use App\Http\Controllers\TipoInvestigacionPublicacionController;
use App\Http\Controllers\InvestigacionPublicacionController;
use App\Http\Controllers\EstudioPosgradoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\UbigeoController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\ManejoSoftwareController;
use App\Http\Controllers\ReconocimientoController;
use App\Http\Controllers\ActividadSocialController;
use App\Http\Controllers\BonificacionController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\TCPDFController;

//use App\Http\Middleware\verPaso;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', function () { 
    return Inertia::render('Publico/index');
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
Route::get('/experiencia-docente', fn () => Inertia::render('Publico/Registro/experienciaDocente'))->name('registro-experiencia-docente');
Route::get('/manejo-software', fn () => Inertia::render('Publico/Registro/manejoSoftware'))->name('registro-manejo-software');
Route::get('/idiomas', fn () => Inertia::render('Publico/Registro/idiomas'))->name('registro-idiomas');
Route::get('/reconocimientos', fn () => Inertia::render('Publico/Registro/reconocimientos'))->name('registro-reconocimientos');
Route::get('/proyeccion-cultural', fn () => Inertia::render('Publico/Registro/proyeccion'))->name('registro-proyeccion');
Route::get('/proyeccion-bonificacion', fn () => Inertia::render('Publico/Registro/bonificacion'))->name('registro-bonificacion');



Route::middleware('auth')->group(function () {

    Route::get('/registro', fn () => Inertia::render('Publico/cv/index'))->name('cv');

    Route::post('/save-descripcion', [DescripcionController::class, 'save']);
    Route::get('/get-descripcion', [DescripcionController::class, 'getDescripcion']);
    Route::get('/delete-descripcion/{id}', [DescripcionController::class, 'eliminar']);

    Route::post('/save-candidato', [CandidatoController::class, 'Save']);
    Route::get('/get-candidato', [CandidatoController::class, 'getCandidato']);


    Route::post('/save-manejo-software', [ManejoSoftwareController::class, 'save']);
    Route::get('/get-software-especializado', [ManejoSoftwareController::class, 'getManejoSoftware']);
    Route::get('/eliminar-manejo-software/{id}', [ManejoSoftwareController::class, 'eliminar']);

    Route::post('/save-idioma', [IdiomaController::class, 'save']);
    Route::get('/get-idiomas', [IdiomaController::class, 'getIdiomas']);
    Route::get('/eliminar-idioma/{id}', [IdiomaController::class, 'eliminar']);


    Route::post('/save-reconocimiento', [ReconocimientoController::class, 'save']);
    Route::get('/get-reconocimientos', [ReconocimientoController::class, 'getReconocimientos']);
    Route::get('/eliminar-reconocimiento/{id}', [ReconocimientoController::class, 'eliminar']);

    Route::post('/save-actividad-proyeccion', [ActividadSocialController::class, 'save']);
    Route::get('/get-actividades', [ActividadSocialController::class, 'getActividades']);
    Route::get('/eliminar-bonificacion', [ActividadSocialController::class, 'eliminar']);

    Route::post('/save-bonificacion', [BonificacionController::class, 'save']);
    Route::get('/get-bonificaciones', [BonificacionController::class, 'getBonificaciones']);
    Route::get('/eliminar-bonificacion/{id}', [BonificacionController::class, 'eliminar']);

    Route::get('/get-plazas/{id}', [PlazaController::class, 'getPlazas']);
    Route::post('/save-inscripcion', [InscripcionController::class, 'save']);
    Route::get('/get-inscripciones', [InscripcionController::class, 'getInscripciones']);


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
    Route::get('/get-publicaciones', [InvestigacionPublicacionController::class, 'getPublicaciones']);Route::get('/eliminar-publicacion', [InvestigacionPublicacionController::class, 'eliminarPublicacion']);

    Route::post('/subir-experiencia-no-docente', [ExperienciaController::class, 'subirPublicacionNoDocente']);
    Route::get('/get-experiencia-no-docente', [ExperienciaController::class, 'getExperienciaNodocente']);
    Route::get('/eliminar-experiencia-no-docente/{id}', [ExperienciaController::class, 'eliminar']);

    Route::post('/subir-experiencia-docente', [ExperienciaController::class, 'subirPublicacionDocente']);
    Route::get('/get-experiencia-docente', [ExperienciaController::class, 'getExperienciaDocente']);

});


Route::get('/pdf', [PDFController::class, 'generatePDF']);
Route::get('/donwload-anexo/{cod}', [PDFController::class, 'downloadAnexos']);

Route::get('/test-tcpdf', [TCPDFController::class, 'generatePDF']);

//Route::get('/eliminar-publicacion', [InvestigacionPublicacionController::class, 'eliminarPublicacion']);

// Route::get('/get-estudios-usuario', [EstudioPosgradoController::class, 'getEstudios']);
// Route::get('/eliminar-estudio/{id}', [EstudioPosgradoController::class, 'eliminarEstudio']); 

Route::post('/get-ubigeos', [UbigeoController::class, 'getUbigeo']);


Route::get('/', fn () => Inertia::render('Publico/index'))->name('inicio');

require __DIR__.'/auth.php';
