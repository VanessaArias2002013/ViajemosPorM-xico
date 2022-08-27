<?php


use App\Http\Controllers\mapsController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\formularioController;
use App\Http\Controllers\formulariController;
use App\Http\Controllers\IniController;
use App\Http\Livewire\LuTuristicos;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/maps', function () {
    return view('maps');
});

//Route::resource('inicio', 'InicioController');

//Rutas para invocar controlador con recurso
Route::resource('formularioo', formulariController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

 
Route::get('/turisticos', function () {
    return view('livewire.lu-turistico');
})->name('turisticos');

});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


 