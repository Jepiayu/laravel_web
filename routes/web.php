<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


// Route::get('/', function () {return view('welcome');});

Route::get("/books", [BookController::class, 'index'])->name('books.index');
Route::post("/books", [BookController::class, 'store'])->name('books.store');
// Mostrar formulario de edición
Route::get("/books/{id}/edit", [BookController::class, 'edit'])->name('books.edit');

// Actualizar libro
Route::put("/books/{id}", [BookController::class, 'update'])->name('books.update');

// Eliminar libro
Route::delete("/books/{id}", [BookController::class, 'destroy'])->name('books.destroy');