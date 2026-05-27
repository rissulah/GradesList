<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('students', StudentController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('grades', GradeController::class);

    Route::get('/report-card/{student}', [GradeController::class, 'reportCard'])
         ->name('grades.report');
});

// ←←←←←←←←←← THIS IS VERY IMPORTANT ←←←←←←←←←←
require __DIR__.'/auth.php';