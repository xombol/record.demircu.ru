<?php

use App\Http\Controllers\Record\BookingController;
use App\Http\Controllers\Record\DoctorController;
use App\Http\Controllers\Record\SchedulesController;
use App\Http\Controllers\Record\SpecialtyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SpecialtyController::class, 'index'])->name('index');

Route::prefix('online-record')->name('online-record.')->group(function () {
    Route::get('/specialties/{specialty}', [SpecialtyController::class, 'show'])->name('show');
    Route::get('/specialties/{specialty}/doctor/{doctor}', [DoctorController::class, 'record'])->name('record');
    Route::post('/specialties/{specialty}/doctor/{doctor}/schedules', [SchedulesController::class, 'list'])->name('list');
    Route::post('/specialties/{specialty}/doctor/{doctor}/booking', [BookingController::class, 'create'])->name('create');
});


