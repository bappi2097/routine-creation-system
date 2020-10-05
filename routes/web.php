<?php

use App\Http\Controllers\ImportExcelController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/day', [DayController::class, 'index']);
Route::get('/day', [DayController::class, 'store'])->name('dayStore');
Route::get('/room', [RoomController::class, 'index']);
Route::get('/room', [RoomController::class, 'store'])->name('roomStroe');
Route::get('/slot', [SlotController::class, 'index']);
Route::get('/slot', [SlotController::class, 'store'])->name('slotStroe');
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher', [teacherController::class, 'store'])->name('teacherStore');

Route::get('/routine', [ImportExcelController::class, 'create'])->name('create');
Route::post('/routine', [ImportExcelController::class, 'store'])->name('store');

