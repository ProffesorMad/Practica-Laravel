<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['es', 'en', 'fr'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');
