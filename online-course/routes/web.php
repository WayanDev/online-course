<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaterialsController;

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
    return view('home');
});

Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/courses', [CourseController::class, 'search'])->name('kursus.search');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
Route::get('/kursus/create', [KursusController::class, 'create'])->name('kursus.create');
Route::post('/kursus', [KursusController::class, 'store'])->name('kursus.store');
Route::get('/kursus/{id}/edit', [KursusController::class, 'edit'])->name('kursus.edit');
Route::put('/kursus/{id}', [KursusController::class, 'update'])->name('kursus.update');
Route::delete('/kursus/{id}', [KursusController::class, 'destroy'])->name('kursus.destroy');




Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/create', [MateriController::class, 'create'])->name('materi.create');
Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');
Route::get('/materi/{id}/edit', [MateriController::class, 'edit'])->name('materi.edit');
Route::put('/materi/{id}', [MateriController::class, 'update'])->name('materi.update');
Route::delete('/materi/{id}', [MateriController::class, 'destroy'])->name('materi.destroy');

Route::get('/materials/{id}', [MaterialsController::class, 'index'])->name('materials');