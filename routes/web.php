<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/hello', function () {
    return 'Hello';
});

Route::get('/mahasiswa/{id}', function ($id) {
    return "Mahasiswa Dengan ID ke $id";
})->where('id', '[0-9]+');

Route::get('/mahasiswa/{id}/{nama}', function ($id, $nama) {
    return "Mahasiswa Dengan ID ke $id & Nama $nama";
})->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);

Route::get('/hello',[WelcomeController::class]);