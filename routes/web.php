<?php

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
// Route::get('prueba', function ()
// {
// 	return "hola mundo";
// });

// Route::get('prueba/{nombre}', function ($nombre)
// {
// 	return "hola mundo y " . $nombre;
// });

// Route::get('pruebas/{nombre?}', function ($nombre="pluto")
// {
// 	return "hola mundo y " . $nombre;
// });

Route::get('/demo', function () {
 
   return view('demo');
 
});


Route::get('/', 'FrontCOntroller@index');
Route::get('contacto', 'FrontCOntroller@contacto');
Route::get('reviews', 'FrontCOntroller@reviews');


Auth::routes();



Route::resource('movies', 'MovieController');

Route::resource('users', 'UserController');
Route::get('usuarios_borrados', 'UserController@usuariosBorrados')->name('users.borrados');
Route::get('usuario_restablecer/{user}', 'UserController@usuarioRestablecer')->name('users.restablecer');