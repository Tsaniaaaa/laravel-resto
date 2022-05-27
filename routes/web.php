<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/admin', function () {
    return view('layouts\admin', [
        "name" => "index"
    ]);
})->middleware(['auth',])->name('admin.');


require __DIR__.'/auth.php';