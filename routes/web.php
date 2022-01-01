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

Route::get('/demo-url','\App\Http\Controllers\DemoController@test');
Route::get('/to-do-list','\App\Http\Controllers\ListController@index');
Route::get('/create','\App\Http\Controllers\ListController@create');
Route::get('/edit','\App\Http\Controllers\ListController@edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
