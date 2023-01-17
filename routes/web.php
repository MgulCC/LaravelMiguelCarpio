<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
/*
//ruta que devuelve la vista welcome1
Route::get('/', function () {
    return view('welcome1');
});

//ruta que devuelve la vista welcome2
Route::get('/saludo1/{name}', function ($nombre) {
    return view('welcome2', ['name' => $nombre]);
});

//ruta con parametro nick opcional
Route::get('/saludo2/{nombre}/{nick?}', function ($nombre, $nick = null) {
    if ($nick == nunll) {
        return "Bienvenido {$nombre}, tu apodo es {$nick}";
    } else {
        return "Bienvenido {$nombre}, no tienes apodo";
    }
});

//ruta con id que solo acepta numeros enteros
Route::get('/formato/usuarios/{id}', function ($id) {
    
    return "Hola usuario {$id}!";
    
})->where('id', '[0-9]{1,4}');

//ruta que acepta todos los verbos
Route::any("/saludoTodos", function(){
	echo 'Esta ruta acepta todos los verbos';
});

//rutas que comparten el prefijo saludo2
Route::prefix('saludo2')->group( function (){
    Route::get('/', function(){
        return view('welcome2');
    });
    
    Route::get('/uno', function(){
        return view('welcome2');
    });
    
    Route::get('/{id}', function($id){
        return "¡Hola, {$id}!";
    })->where(['id' => '[0-9]{1,3}']);
    
    Route::get('{nombre}', function($nombre){
        return "{$nombre} tiene " . strlen($nombre) . " letras";
    })->where(['nombre' =>'[a-zA-Z0-9]{1,4}']);

});

//rutas que redireccionan
Route::redirect('/saludoUno', '/saludo1');
Route::redirect('/saludoDos', '/saludo2');

//errores
Route::fallback(function(){
    return "Error 404";
});

//renombrar las rutas y redirigir
Route::get('/saludo1', function(){
})->name('primerSaludo');

Route::redirect('/otroSaludoUno', '/primerSaludo');

*/

//ruta que devuelve la vista welcome2
//Route::get('/usuarios/{id}/edit', UserController::class);
Route::get('/usuarios/{id}', [UserController::class, 'edit']);
//Route::get('/userc/{name}', UserController::class);

Route::get('/saludo1', [UserController::class, 'edit']);












