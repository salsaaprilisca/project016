<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//product
Route::get('barang', 'API\ProductController@index');
Route::get('barang/{id}','API\ProductController@show');
//tambah data
Route::post('barang','API\ProductController@store');
//hapus data
Route::delete('barang/{id}','API\ProductController@destroy');

//category
Route::get('kriteria', 'API\CategoryController@index');
Route::get('kriteria/{id}','API\CategoryController@show');
//tambah data
Route::post('kriteria','API\CategoryController@store');
//hapus data
Route::delete('kriteria/{id}','API\CategoryController@destroy');
