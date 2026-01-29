<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\ReportsController;

Route::get('/', function () {
    return view('index');
});
Route::get('/dasboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::resource('items', ItemsController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('ruang', RuangController::class);
Route::resource('reports', ReportsController::class);
