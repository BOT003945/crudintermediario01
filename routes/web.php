<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Deptos;
use App\Http\Livewire\Doctores;
use App\Http\Livewire\Empresas;
use App\Http\Livewire\Estudios;
use App\Http\Livewire\Pacientes;
use App\Http\Livewire\Solicitudes;
use App\Http\Controllers\DetalleGrupoAntibioticoController;
use App\Models\Solicitud;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//Route Hooks - Do not delete//
	Route::view('grupo_antibioticos', 'livewire.grupo_antibioticos.index')->middleware('auth');
	Route::view('estudio', 'livewire.estudio.index')->middleware('auth');
	Route::view('doctores', 'livewire.doctores.index')->middleware('auth');
	Route::view('deptos', 'livewire.deptos.index')->middleware('auth');
    Route::get('/deptos-pdf', [Deptos::class, 'reportePDF']);
    
    Route::view('doctores', 'livewire.doctores.index')->middleware('auth');
    Route::get('/doctores-pdf', [Doctores::class, 'reportePDF']);

	Route::view('empresas', 'livewire.empresas.index')->middleware('auth');
    Route::get('/empresas-pdf', [Empresas::class, 'reportePDF']);

	Route::view('pacientes', 'livewire.pacientes.index')->middleware('auth');
    Route::get('/pacientes-pdf', [Pacientes::class, 'reportePDF']);

	Route::view('/estudios', 'livewire.estudios.index')->middleware('auth');
    Route::get('/estudios-pdf', [Estudios::class, 'reportePDF']);

    Route::View('solicitudes', 'livewire.solicitudes.index')->middleware('auth');
    Route::View('pacientes2', 'livewire.pacientes2.index')->middleware('auth');

/*     Route::get('solicitudes', [Solicitudes::class])->middleware('auth');*/
// Route::get('/clear-cache', function(){
//     $run = Artisan::call('config:clear');
//     $run = Artisan::call('cache:clear');
//     $run = Artisan::call('config:cache');
//     return 'FINISHED';
// });

Route::resource('bacterias', 'App\Http\Controllers\BacteriaController');
Route::resource('antibioticos', 'App\Http\Controllers\AntibioticoController');
Route::resource('grupoantibioticos', 'App\Http\Controllers\GrupoAntibioticoController');

Route::resource('detallegrupoantibioticos', DetalleGrupoAntibioticoController::class);
//Route::get('/edit', [DetalleGrupoAntibioticoController::class, 'edit']);
Route::delete('/detallegrupoantibioticos/{id}', [DetalleGrupoAntibioticoController::class, 'destroy2']);

