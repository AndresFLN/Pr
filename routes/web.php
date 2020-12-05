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
    return view('prueba');
});
Route::get('/administrador', function () {
    return view('Admin.administrador');
});

Route::get('userPage', function () {
    return view('userPage.index');
})->name('userPage');

Route::get('user', function () {
    return view('usuario.index');
})->name('user');

Route::get('elem', function () {
    return view('elemento.index');
})->name('elem');

Route::get('visi', function () {
    return view('visitante.index');
})->name('visi');

Route::get('vehi', function () {
    return view('vehiculo.index');
})->name('vehi');

Route::get('nove', function () {
    return view('novedad.index');
})->name('nove');

Route::get('ingreso', function () {
    return view('ingreso.index');
})->name('ingreso');


Route::post('/Guardar/Ingreso', 'IngresoController@store');

Route::get('/Exportar/Producto','IngresoController@ExportarExcel');

Route::Resource('usuarios', 'UsuarioController');

Route::Resource('elementos', 'ElementoController');

Route::Resource('vehiculos', 'VehiculoController');

Route::Resource('visitantes', 'VisitanteController');

Route::Resource('novedades', 'NovedadController');

//Route::Resource('ingreso', 'IngresoController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
