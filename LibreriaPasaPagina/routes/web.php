<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::resource('libros', LibroController::class);

Route::get('libros/{libro}/confirmDelete', [LibroController::class, 'confirmDelete'])->name('libros.confirmDelete');
