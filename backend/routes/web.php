<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

use Spatie\Permission\Traits\HasRoles;

/*
|--------------------------------------------------------------------------
| Admin login
|--------------------------------------------------------------------------
*/

Route::get('/test', [BackendController::class, 'test'])->name('test');

Route::get('/admin/registration', [BackendController::class, 'admin_registration'])->name('admin_registration');
Route::post('/admin/registration', [BackendController::class, 'admin_registration_post'])->name('admin_registration_post');

Route::get('/', [BackendController::class, 'admin_login'])->name('admin_login');
Route::post('/admin/login', [BackendController::class, 'admin_login_post'])->name('admin_login_post');
Route::get('/admin/logout', [BackendController::class, 'admin_logout'])->name('admin_logout');

/*
|--------------------------------------------------------------------------
| Admin protected routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum', 'role:visitor')->group(function () {

    Route::get('/admin/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
    Route::post('/admin/dashboard', [BackendController::class, 'dashboard_post']);

    Route::post('/admin/logout', [BackendController::class, 'logout'])->name('admin.logout');

});

/*
|--------------------------------------------------------------------------
| Fallback
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    abort(404);
});
