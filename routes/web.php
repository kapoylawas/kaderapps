<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PuskesmasController;

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

Route::get('/', function () {
    return view('welcome');
});


// admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    // admin dashboard route
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/jabatan', JabatanController::class)->name('jabatan');
    Route::get('/add-jabatan', JabatanController::class, 'createJabatan')->name('add-jabatan');

    Route::get('/bank', BankController::class)->name('bank');

    Route::get('/puskesmas', PuskesmasController::class)->name('puskesmas');
});
