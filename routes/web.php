<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BadmintonController;
use App\Http\Controllers\BadmintonFrontController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\BasketFrontController;
use App\Http\Controllers\DrumController;
use App\Http\Controllers\DrumFrontController;
use App\Http\Controllers\GitarController;
use App\Http\Controllers\GitarFrontController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriFrontController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PelangganFrontController;
use App\Http\Controllers\PianoController;
use App\Http\Controllers\PianoFrontController;
use App\Http\Controllers\SepakbolaController;
use App\Http\Controllers\SepakbolaFrontController;
use App\Http\Controllers\LoginController;


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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard.dashboard');
})->Middleware('auth');


//link front-end
Route::resource('/sepakbola',SepakbolaFrontController::class);

Route::resource('/basket',BasketFrontController::class);

Route::resource('/badminton',BadmintonFrontController::class);

Route::resource('/drum',DrumFrontController::class);

Route::resource('/gitar',GitarFrontController::class);

Route::resource('/piano',PianoFrontController::class);

Route::resource('/kategori',KategoriFrontController::class);

Route::resource('/pelanggan',PelangganFrontController::class);

Route::get('/login',[LoginController::class,'login'])->name('login')->Middleware('guest');

Route::post('/login',[LoginController::class,'authenticate']);

Route::get('/logout',[LoginController::class,'logout']);



//link back-end
Route::resource('/sepakbola-dashboard',SepakbolaController::class);

Route::resource('/basket-dashboard',BasketController::class);

Route::resource('/badminton-dashboard',BadmintonController::class);

Route::resource('/gitar-dashboard',GitarController::class);

Route::resource('/drum-dashboard',DrumController::class);

Route::resource('/piano-dashboard',PianoController::class);

Route::resource('/kategori-dashboard',KategoriController::class);

Route::resource('/pelanggan-dashboard',PelangganController::class);
