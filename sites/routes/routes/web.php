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

Route::get('/', function () {
    return view('welcome');
});
//ruta con string
Route::get('prueba', function () {
    return ('Hola prueba');
});

//devolver solo una vista
Route::view('vista', 'welcome');

//conectando con un controlador
use App\Http\Controllers\PageController;
Route::resource('pages', PageController::class); // rutas con esto estamos regisrando todas las rutas de un crud 7
