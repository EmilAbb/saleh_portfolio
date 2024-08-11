<?php



//,'middleware'=>'admin'
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login',[AdminController::class,'loginView'])->name('admin.login-view');
Route::post('/admin/login',[AdminController::class,'login'])->name('admin.login');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => 'admin'],function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('/menus',MenuController::class)->except('show');});
