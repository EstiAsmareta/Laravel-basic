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
Route::get('/user/{name}', function ($name) {
    return view('user',['nama' => $name]);
});
*/


/**Baris baris ini digunakan untuk mengambil dan menampilkan view sesuai dengan nama view yang ingin ditampilkan
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dataObat', function () {
    return view('dataObat');
});