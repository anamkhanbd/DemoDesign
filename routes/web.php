<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get('/',[PagesController::class,'index'])->name('home');
Route::get('/camera',[PagesController::class,'camera'])->name('camera');
Route::get('/flim-camera',[PagesController::class,'flimCamera'])->name('flim');
