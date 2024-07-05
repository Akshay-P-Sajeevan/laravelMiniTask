<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/toggle-status', [StudentController::class, 'toggleStatus'])->name('students.toggle-status');




