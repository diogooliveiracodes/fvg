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
Route::get('/handson', function () {
    return view('handson');
})->name('handson');

Route::get('/mastopexia', function () {
    return view('mastopexia');
})->name('mastopexia');

Route::get('/gestao-e-marketing', function () {
    return view('gestao_e_marketing');
})->name('gestao-e-marketing');

Route::get('/mamoplastia-de-aumento', function () {
    return view('mamoplastia');
})->name('mamoplastia-de-aumento');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
