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
/*
Podemos tener rutas de tipo GET, POST, DELETE, PUT, RESOURCE
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function(){
    echo 'Esta es la session de articulos';
});