<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('welcome');});

Route::get('/Invoices', [App\Http\Controllers\ProfileController::class, 'index'])->name('dashboard');

Route::get('/Invoices/create', [App\Http\Controllers\InvoiceController::class, 'create'])->name('Invoice.create');

Route::post('/p', [App\Http\Controllers\InvoiceController::class, 'store']);

Route::get('/p/{Invoice}/delete', [App\Http\Controllers\InvoiceController::class, 'destroy']);

Route::get('/p/{Invoice}/install', [App\Http\Controllers\InvoiceController::class, 'install']);

Route::get('/search', [App\Http\Controllers\InvoiceController::class, 'search']);



require __DIR__.'/auth.php';