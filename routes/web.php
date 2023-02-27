<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Admin\SKController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\KotaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PpkbdController;
use App\Http\Controllers\Admin\PayrolController;
use App\Http\Controllers\Admin\BiodataController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\KelurahanController;
use App\Http\Controllers\Admin\PuskesmasController;
use App\Http\Controllers\Admin\RekaphonorController;
use App\Http\Controllers\Admin\PerhitunganController;

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


Route::post('/biodatas', [\App\Http\Controllers\Admin\BiodataController::class, 'simpan'])->name('admin.bio.simpan');
// admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    // admin dashboard route
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Route::put('/test/{kota:id}', 'App\Http\Controllers\TestController@update')->name('u.kota');

    Route::resource('/user', UserController::class);
    Route::resource('/bank', BankController::class);
    Route::resource('/puskesmas', PuskesmasController::class);
    Route::resource('/kelurahan', KelurahanController::class);
    Route::resource('/kecamatan', KecamatanController::class);
    Route::resource('/kota', KotaController::class);
    Route::resource('/biodata', BiodataController::class);

    Route::resource('/jabatan', JabatanController::class);
    Route::resource('/sk', SKController::class);
    Route::resource('/rekaphonor', RekaphonorController::class);
    Route::resource('/perhitungan', PerhitunganController::class);
    Route::resource('/payrol', PayrolController::class);
    Route::resource('/ppkbd', PpkbdController::class);
});
