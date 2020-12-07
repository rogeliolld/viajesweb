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

Route::get('/', 'HomeController@principal');

Route::get('/admin', function () {
    return view('home');
});
Auth::routes(['reset'=>false]);
Route::resource('/admin/paginas', 'PaginasController')->middleware('auth');
Route::resource('/admin/planes', 'PlanesController')->middleware('auth');
Route::resource('/admin/slider', 'SliderController')->middleware('auth');
Route::resource('/admin/destinos', 'DestinosController')->middleware('auth');
Route::resource('/admin/galeriadestinos', 'GaleriaDestinosController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
