<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::name('students.')->prefix('students')->group(function () {
    // Route::get('/', function() {
    //     return "Ini adalah halaman daftar pengguna.";
    // })-> name('index');
    
        Route::get('/', [UserController::class, 'index'])-> name('index');

    // Route::get('/{id}', function($id) {
    //     return "Ini adalah halaman detail user dengan ID: $id (method 1) " . $id . "(method 2)";
    // })-> name('show');
    Route::get('/{id}', [UserController::class, 'show'])-> name('show');
});