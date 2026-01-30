<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/projects', [ProjectController::class, 'index'])
    ->middleware('auth')
    ->name('projects.index');

Route::resource('students', StudentController::class)
    ->middleware('auth');
