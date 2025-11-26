<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlagiarismController;

Route::get('/', [PlagiarismController::class, 'showForm'])->name('home');

Route::get('/plagiarism', [PlagiarismController::class, 'showForm'])->name('plagiarism.form');
Route::post('/plagiarism', [PlagiarismController::class, 'check'])->name('plagiarism.check');
Route::delete('/plagiarism/history/{id}', [PlagiarismController::class, 'deleteHistory'])->name('plagiarism.deleteHistory');
Route::delete('/plagiarism/history', [PlagiarismController::class, 'clearHistory'])->name('plagiarism.clearHistory');
