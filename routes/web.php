<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function() {
    return view('template');
});

Route::get('/',[HomeController::class,'show']);

Route::get('login', function() {
    return view('login');
})->name('login');
Route::post('user/auth',[UserController::class,'auth']);
Route::get('user/logout',[UserController::class,'logout']);

Route::get('profil',[profilController::class,'profil']);
Route::get('profil/show',[profilController::class,'show']);
Route::get('profil/add',[profilController::class,'add']);
Route::post('profil/create',[profilController::class,'create']);
Route::get('profil/edit/{id}',[profilController::class,'edit']);
Route::post('profil/update/{id}',[profilController::class,'update']);

Route::get('portofolio',[PortofolioController::class,'show']);
Route::get('portofolio/add',[PortofolioController::class,'add']);
Route::post('portofolio/create',[PortofolioController::class,'create']);
Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);
Route::get('portofolio/edit/{id}', [PortofolioController::class,'edit']);
Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);

Route::get('contact',[ContactController::class,'show']);
Route::get('contact/add',[ContactController::class,'add']);
Route::post('contact/create',[ContactController::class,'create']);
Route::get('contact/hapus/{id}',[ContactController::class,'delete']);