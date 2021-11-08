<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
    Rutas de Auth
*/


require __DIR__.'/auth.php';


Route::get('/', function () {
    return redirect()->route('dashboard');
})->middleware('auth');


Route::get('/dashboard', 'MainController@dashboard')->middleware(['auth'])->name('dashboard');


Route::get('/logout' , 'Auth\LoginController@logout')->name('logout');

/* Fin  Rutas de Auth */



/* Rutas Usuarios */

Route::get('/usuarios', 'UsuariosController@index')->middleware(['auth'])->name('usuarios');

Route::get('/usuarios/list', 'UsuariosController@getUsuarios')->middleware(['auth'])->name('usuarios.list');

Route::get('/profile', 'UsuariosController@perfil')->middleware(['auth'])->name('perfil');

Route::post('/profile', 'UsuariosController@updatePerfil')->middleware(['auth'])->name('updatePerfil');

Route::group(['middleware' => ['role:Administrador']], function () {
    Route::get('/usuarios/status/{id}', 'UsuariosController@desactivar')->name('desactivarUsuario');
});

/* Fin Rutas Usuarios */



/* Rutas de PGO */



/* Fin de Rutas de PGO */



/* Rutas de Obra */

Route::get('/obras/list', 'ObraController@getObras')->middleware(['auth'])->name('obras.list');

Route::get('/obras/info/{id}', 'ObraController@getInfoObra')->middleware(['auth'])->name('obras.info');

Route::get('/obras/ppto/original/{id_obra}', 'ObraController@presupuestoOriginal')->middleware(['auth'])->name('obras.pptoOriginal');

/* Fin de Rutas de Obra */


/* Rutas de PGO */

Route::get('/pgo', 'SaycoController@pgo')->middleware(['auth'])->name('pgo');

/* Fin de Rutas de PGO */



/* Ruta de Fuente */

Route::get('/catalogos/fuentes/list', 'FuenteController@getFuentes')->middleware(['auth'])->name('fuentes.list');

Route::get('/catalogos/fuente/obras/{id}', 'FuenteController@getObrasdeFuente')->middleware(['auth'])->name('obrasDeFuente.list');

/* Fin de Ruta de Fuente */


/* Ruta de Modalidades */

Route::get('/catalogos/modalidades/list', 'ModalidadContratacionController@getModalidades')->middleware(['auth'])->name('modalidades.list');

Route::get('/catalogos/modalidades/status/{id}', 'ModalidadContratacionController@desactivar')->middleware(['auth'])->name('desactivarModalidad');

/* Fin de Ruta de Modalidades */

/* Ruta de Areas */

Route::get('/catalogos/areas/list', 'AreaController@getAreas')->middleware(['auth'])->name('areas.list');

/* Fin de Ruta de Areas */



/* Rutas Resources */

Route::group(['middleware' => ['role:Administrador']], function () {
    Route::resource('/usuarios', UsuariosController::class);
});

Route::resource('/obras', ObraController::class)->middleware(['auth']);

Route::resource('/pptosOriginales', PresupuestoOriginalController::class)->middleware(['auth']);

Route::resource('/catalogos/fuentes', FuenteController::class)->middleware(['auth']);

Route::resource('/catalogos/modalidades', ModalidadContratacionController::class)->middleware(['auth']);

Route::resource('/catalogos/areas', AreaController::class)->middleware(['auth']);

/* Fin de Rutas Resources */










