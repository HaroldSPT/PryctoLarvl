<?php

use App\Http\Controllers\cursoController;
use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miprimerController;
use App\Http\Controllers\heladosController;
use App\Http\Controllers\preciosController;

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

/* Lo primero es nombrar la ruta entre comilla simple con el nombre
    que desee darle. luego va la coma, seguido de la función y el return
*/

Route::get('/miprimeraruta', function(){
    return 'Estoy aprendiendo Laravel. Esta es mi primera ruta';

});

/*
Los parametros son muy importantes en las rutas de las paginas web y los indicamos entre llaves {}.
Los parametros van dentro de la misma ruta.
*/

Route::get('/minombre/{nombre}', function($nombre){
    return 'Hola soy ' . $nombre;
});

Route::get('/suma/{num1}/{num2}', function($num1,$num2){
    return 'La suma es ' . $num1 + $num2;
});

Route::get('micontroller/{a]/{b}', [miprimerController::class,'suma']);

Route::get('holapapu/{loquesea}', [miprimerController::class,'carrera']);

/*La clase va igual que el metodo entre corchetes o llaves. La clase va acompañada de ::class,
y el método tiene que llamarse igual a como está en la clase y entre comilla simple*/
Route::get('heladeria/{opcion}', [heladosController::class,'helado']);

Route::get('precio/{prize}', [preciosController::class,'precios']);

Route::get('iva/{articulo}/{precio}', [preciosController::class,'getIVA']);

Route::resource('cursos', cursoController::class);
Route::resource('docentes', DocenteController::class);