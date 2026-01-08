<?php

use App\Http\Controllers\DiagnosisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DiagnosisController::class, 'index'])->name('home');
Route::get('/quiz', [DiagnosisController::class, 'quiz'])->name('quiz');
Route::post('/diagnose', [DiagnosisController::class, 'analyze'])->name('diagnose');
