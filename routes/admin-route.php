<?php



//,'middleware'=>'admin'
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConatctMeController;
use App\Http\Controllers\Admin\FirstSectionController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProgressTitleController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login',[AdminController::class,'loginView'])->name('admin.login-view');
Route::post('/admin/login',[AdminController::class,'login'])->name('admin.login');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => 'admin'],function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('/menus',MenuController::class)->except('show');
    Route::resource('/first-section',FirstSectionController::class)->except('show');
    Route::resource('/about',AboutController::class)->except('show');
    Route::resource('/skills',SkillController::class)->except('show');
    Route::resource('/socials',SocialController::class)->except('show');
    Route::resource('/messages',ContactMessageController::class)->except('show');
    Route::resource('/progress',ProgressTitleController::class)->except('show');
    Route::resource('/contact-me',ConatctMeController::class)->except('show');
});
