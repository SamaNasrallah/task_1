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

// Route::get('/', function () {
//     return view('test');
// });

Route::get('/','App\Http\Controllers\taskController@create');
Route::post('task/store','App\Http\Controllers\taskController@store');
Route::get('/','App\Http\Controllers\taskController@index');
