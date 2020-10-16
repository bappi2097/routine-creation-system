<?php

use App\Http\Controllers\ImportExcelController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\DayRoomSlotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExcelExportController;
use Illuminate\Support\Facades\Route;


auth()->login(App\Models\User::first());

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/routine', [RoutineController::class, 'index'])->name('routine');
    Route::post('/routine', [RoutineController::class, 'store'])->name('routine-store');
    Route::get('/routine/export', [ExcelExportController::class, 'exportRoutineExcel'])->name('routine-export');
    Route::get('/routine/excel', [RoutineController::class, 'generateExcel']);
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
