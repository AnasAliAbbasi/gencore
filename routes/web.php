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

Route::get(
    'crud',
    'App\Http\Controllers\ProductController@index'
);

Route::view(
    'insert',
    'insert'
    // 'App\Http\Controllers\ProductController@store'
);


Route::view(
    'insert',
    'insert'
    // 'App\Http\Controllers\ProductController@store'
);

Route::post(
    'itemSubmit',
    // 'insert'
     'App\Http\Controllers\ProductController@store'
);

Route::get(

    'delete_item/{id}',
    'App\Http\Controllers\ProductController@destroy'
);

Route::get(
    'edit_item/{id}',
    'App\Http\Controllers\ProductController@edit'
);

Route::post(
    'itemUpdate/{id}',
    'App\Http\Controllers\ProductController@update'
);



