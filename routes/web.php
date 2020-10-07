<?php

use App\Http\Controllers\ImportExcelController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\DayRoomSlotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoutineController;
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

auth()->login(App\Models\User::first());

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    ROute::get('/routine', [RoutineController::class, 'index'])->name('routine');
    ROute::post('/routine', [RoutineController::class, 'store'])->name('routine-store');
    Route::post('/allocation', [ImportExcelController::class, 'store'])->name('store');
    Route::get('/day', [DayController::class, 'index']);
    Route::post('/day', [DayController::class, 'store'])->name('dayStore');
    Route::get('/room', [RoomController::class, 'index']);
    Route::post('/room', [RoomController::class, 'store'])->name('roomStore');
    Route::post('/datSlot', [DayRoomSlotController::class, 'store'])->name('daySlotStore');
    Route::get('/slot', [SlotController::class, 'index']);
    Route::post('/slot', [SlotController::class, 'store'])->name('slotStore');
    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::post('/teacher', [TeacherController::class, 'store'])->name('teacherStore');
});
