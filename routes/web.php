<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\EvidenceUploadController;
use App\Http\Controllers\CohortController;

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::resource('students', StudentController::class);
Route::resource('uploads', EvidenceUploadController::class);
Route::resource('notes', NotesController::class);
Route::resource('cohort', CohortController::class);