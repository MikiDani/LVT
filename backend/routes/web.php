<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin login
|--------------------------------------------------------------------------
*/

Route::get('/', [BackendController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login', [BackendController::class, 'admin_login_post'])->name('admin.login.post');

/*
|--------------------------------------------------------------------------
| Admin protected routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {

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
