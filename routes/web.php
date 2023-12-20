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
Route::get('/lens',[PagesController::class,'lens'])->name('lans');
Route::get('/camera-bags',[PagesController::class,'cameraBag'])->name('cameraBag');
Route::get('/camera-geair',[PagesController::class,'cameraGeair'])->name('cameraGeair');
Route::get('/camera-software',[PagesController::class,'cameraSoftware'])->name('cameraSoftware');
Route::get('/dslr-camera',[PagesController::class,'dslrCamera'])->name('dslrCamera');
Route::get('/tripots',[PagesController::class,'tripots'])->name('tripots');
Route::get('/camera-battery',[PagesController::class,'cameraBattery'])->name('cameraBattery');
Route::get('/camera-charger',[PagesController::class,'cameraCharger'])->name('cameraCharger');
Route::get('/microwphone',[PagesController::class,'microwPhone'])->name('microwPhone');
Route::get('/cameragear',[PagesController::class,'cameraGear'])->name('cameraGear');