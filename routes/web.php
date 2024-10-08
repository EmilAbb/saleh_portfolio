<?php

use App\Http\Controllers\Front\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[SiteController::class,'home'])->name('home');
Route::post('/send-message',[SiteController::class,'createMessage'])->name('createMessage');
Route::get('/video-filter',[SiteController::class,'videoFilter'])->name('videoFilter');
