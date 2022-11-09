<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Estadisticas;
use App\Http\Livewire\Clientes\Clientes;
use App\Http\Livewire\Prestamos\Prestamos;
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
Route::get('estadisticas', Estadisticas::class)->name('estadisticas');
Route::get('Clientes', Clientes::class)->name('Clientes');
Route::get('prestamos', Prestamos::class)->name('prestamos');

Route::get('/', Estadisticas::class)->middleware(['auth'])->name('app');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
