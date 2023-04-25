<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('site.contact');
});

Route::get('/supports', [SupportController::class, 'index'])->name('support.index');

Route::get('/supports/create', [SupportController::class, 'create'])->name('support.create');
Route::post('/supports', [SupportController::class, 'store'])->name('support.store');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::put('/supports/{id}/update', [SupportController::class, 'update'])->name('support.update');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('support.show');
Route::delete('/supports/{id}',  [SupportController::class, 'destroy'])->name('support.destroy');
