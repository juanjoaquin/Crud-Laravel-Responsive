<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

//GET ALL Notes
Route::get('/note', [NoteController::class, 'index'])->name('note.index');
//GET create Notes
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
//POST Create (store)
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
//GET Edit
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
//POST Edit
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
//GET show (mostrar información) 
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
//DELETE (borrar note)
Route::delete('/note/delete/{note}', [NoteController::class, 'destroy'])->name('note.destroy');





