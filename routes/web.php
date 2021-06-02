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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('prueba')->group(function(){
    //def. nom del grup de rutas
    Route::name('prueba.')->group(function(){
        //definimos nuestra ruta
        Route::get('/crear',function(){
            return view('prueba.crear');

        })->name('crear');
       

    });
});

Route::prefix('componente')->group(function(){
    //def. nom del grup de rutas
    Route::name('componente.')->group(function(){
        //definimos nuestra ruta
        Route::get('/crear',function(){
            return view('componente.crear');

        })->name('crear');
       

    });
});

Route::prefix('music')->group(function(){
    //def. nom del grup de rutas
    Route::name('music.')->group(function(){
        //definimos nuestra ruta
        Route::get('/crear',function(){
            return view('music.crear');

        })->name('crear');
       

    });
});

Route::middleware(['auth:sanctum','verified'])->group(function(){
	Route::prefix('form')->group(function(){
		Route::name('form.')->group(function (){
			
			Route::get('/ver',function(){
		        return view('form.ver');
		    })->name('ver');
	         
		});
	});
});



