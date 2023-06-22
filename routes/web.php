<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

// Route::get('/', [EventController::class, 'index'])->name('events.index');

// User Routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// Route::get('/courses/create', [UserController::class, 'create'])->name('courses.create');
Route::get('/courses/create', function () {
    return view('courses.create');
});

Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

Route::get('/courses/{id}', [UserController::class, 'show'])->name('courses.show');

Route::get('/courses/{id}/edit', [UserController::class, 'edit'])->name('courses.edit');

Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');

Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
