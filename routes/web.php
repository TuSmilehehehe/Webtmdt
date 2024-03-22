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

Route::get("/vidu1","App\Http\Controllers\ViDuController@vidu");
Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");


Route::get("/chucnangNhi","App\Http\Controllers\ViDuController@chucnangNhi");

Route::get("/camtu","App\Http\Controllers\ViDuController@camtu");


Route::get("/chucnangkimngoc","App\Http\Controllers\ViduController@chucnangkimngoc");

Route::get("/camtucuatui","App\Http\Controllers\ViDuController@camtucuatui");
Route::get("/camtucuatui1","App\Http\Controllers\ViDuController@camtucuatui1");

Route::get("/testbranchnha","App\Http\Controllers\ViDuController@testbranchnha");