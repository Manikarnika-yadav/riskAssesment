<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AssesmentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
Route::controller(AssetController::class)->prefix('assets')->group(function () {
        Route::get('', 'index')->name('assets');
        Route::get('create', 'create')->name('assets.create');
        Route::post('store', 'store')->name('assets.store');
        Route::get('show/{id}', 'show')->name('assets.show');
        Route::get('edit/{id}', 'edit')->name('assets.edit');
        Route::put('edit/{id}', 'update')->name('assets.update');
        Route::delete('destroy/{id}', 'destroy')->name('assets.destroy');
    });
// Route::controller(AssesmentController::class)->prefix('assesments')->group(function () {
//         Route::get('', 'index')->name('assesments');
//         Route::get('create', 'create')->name('assets.create');
//         Route::post('store', 'store')->name('assesments.store');
//         Route::get('edit/{id}', 'edit')->name('assesments.edit');
//         Route::put('edit/{id}', 'update')->name('assesments.update');
//         Route::delete('destroy/{id}', 'destroy')->name('assesments.destroy');
//     });
 
Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::get('ajax-crud-datatable', [AssesmentController::class, 'index']);
Route::post('store', [AssesmentController::class, 'store']);
Route::post('edit', [AssesmentController::class, 'edit']);
Route::post('delete', [AssesmentController::class, 'destroy']);