<?php

use Illuminate\Routing\Route as RoutingRoute;
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


Route::prefix('usuarios')-> group(function(){
    Route::get('',function(){
        return 'usuarios';
    })->name('listar.usuario');

    Route::get('/edit',function(){
        return 'editar';
    })->name('editar.usuario');

    Route::get('insert',function(){
        return 'inserir';
    })->name('inserir.usuario');

});



Route::get('/users/{id}/{tipo}', function ($id, $tipo) {
    return $id . ' - ' . $tipo;
});

Route::get('/a-empresa/{string?}', function($string = null){
    return $string;
});


Route::get('/', function () {
    // return[
    //     'primeiro nome' => 'alipio',
    //     'segundo nome'  => 'oliveira',
    // ];
    //return 'alipio';
    return view('welcome');
});
