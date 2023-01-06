<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AspekController;
use App\Http\Controllers\Admin\AuditController;
use App\Http\Controllers\Admin\UraianController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/report', [App\Http\Controllers\Admin\ReportController::class, 'print_report_bulanan'])->name('print.report.bulanan');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::prefix('penilaian')->group(function () {
        Route::resource('aspek', AspekController::class);
        Route::resource('uraian', UraianController::class);
        Route::resource('audit', AuditController::class);
    });
});
