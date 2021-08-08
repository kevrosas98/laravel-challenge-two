<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pizzeriaController;


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

Route::get('/', [pizzeriaController::class, 'inicio']);
Route::get('/producto/{producto}', [pizzeriaController::class, 'detalle'])->name('producto');
Route::get('/tiendas', [pizzeriaController::class, 'tiendas'])->name('tiendas');

Route::get('/login', [pizzeriaController::class, 'login'])->name('login');
Route::post('/login/validar', [pizzeriaController::class, 'validar']);

Route::get('/clientes/pedidos', [pizzeriaController::class, 'pedidos']);

Route::get('/login/salir', [pizzeriaController::class, 'salir']);






