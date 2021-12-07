<?php

use App\Http\Livewire\Materias\AgregarMaterias;
use App\Http\Livewire\Materias\EditarMaterias;
use App\Http\Livewire\Materias\EliminarMaterias;
use App\Http\Livewire\Materias\IndexMaterias;
use App\Http\Livewire\Materias\MostrarMaterias;
use App\Http\Livewire\Usuarios\AgregarUsuarios;
use App\Http\Livewire\Usuarios\EditarUsuarios;
use App\Http\Livewire\Usuarios\EliminarUsuarios;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\MostrarUsuarios;
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

/* ruta de usuarios */
Route::get('/usuarios',IndexUsuarios::class)->name('usuarios.index');
Route::get('usuarios/agregar',AgregarUsuarios::class)->name('usuarios.agregar');
Route::get('/usuarios/{agregar}/editar',EditarUsuarios::class)->name('usuarios.editar');
Route::get('/usuarios/{agregar}/eliminar',EliminarUsuarios::class)->name('usuarios.eliminar');
Route::get('usuarios/{agregar}/mostrar', MostrarUsuarios::class)->name('usuarios.mostrar');

/* ruta de materias */
Route::get('/materias',IndexMaterias::class)->name('materias.index');
Route::get('materias/agregar',AgregarMaterias::class)->name('materias.agregar');
Route::get('/materias/{agregar}/editar',EditarMaterias::class)->name('materias.editar');
Route::get('/materias/{agregar}/eliminar',EliminarMaterias::class)->name('materias.eliminar');
Route::get('materias/{agregar}/mostrar', MostrarMaterias::class)->name('materias.mostrar');