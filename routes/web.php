<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SessionController;

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
    return view('dashboard');
})->name('dashboard');

Route::resource('departemen', DepartemenController::class)->middleware('IniLogin');
Route::resource('karyawan',KaryawanController::class)->middleware('IniLogin');    
Route::resource('karyawan', KaryawanController::class)->middleware('IniTamu');
Route::get('/login',[SessionController::class,'index'])->middleware('IniTamu');
Route::get('sesi',[SessionController::class,'index'])->middleware('IniTamu');
Route::post('/sesi/login',[SessionController::class,'login'])->middleware('IniTamu');
Route::get('/sesi/logout',[SessionController::class,'logout']);