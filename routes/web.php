<?php

use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\EventController;
use App\Http\Livewire\EventShow;
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

Route::get('/', [EventController::class,'index']);
Route::get(
    '/admin/events',
    function () {
        return view('admin.events.index');
    }
)->name('admin.events.index')->middleware(['auth:sanctum','admin']);
Route::get(
    '/admin/events/{id}',
    [AdminEventController::class,'show']
)->name('admin.events.show')->middleware(['auth:sanctum','admin']);
