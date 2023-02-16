<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BiodataController;
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

    Route::resource('/user', UserController::class)->only('index', 'update', 'destroy');

    Route::resource('/jabatan', JabatanController::class)->only('index', 'update', 'destroy');

    Route::resource('/bank', BankController::class)->only('index', 'update', 'destroy');

    Route::resource('/puskesmas', PuskesmasController::class)->only('index', 'update', 'destroy');

    Route::resource('/biodata', BiodataController::class)->only('index', 'update', 'create', 'destroy', 'viewBiodata', 'viewJabatan');
});
