<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BiodataController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PuskesmasController;
use App\Http\Controllers\Admin\BiodatakaderController;
use App\Http\Controllers\Admin\SKController;

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
    return view('auth/login');
});


// admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    // admin dashboard route
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::resource('/user', UserController::class)->only('index', 'update', 'destroy');

    Route::resource('/bank', BankController::class);

    Route::resource('/puskesmas', PuskesmasController::class);

    Route::resource('/biodata', BiodataController::class)->only('index', 'update', 'create', 'destroy');

    Route::resource('/jabatan', JabatanController::class);

    Route::resource('/biodatakader', BiodatakaderController::class)->only('index', 'update', 'create', 'destroy');

    Route::resource('/sk', SKController::class)->only('index', 'update', 'create', 'destroy');
});
