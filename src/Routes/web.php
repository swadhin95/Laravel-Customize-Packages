<?php

use Illuminate\Support\Facades\Route;


// Beginning Of FormP58AController Routes
use BAF\ACR\Http\Controllers\FormP58AController;

Route::group(['middleware' => ['web'], 'prefix' => 'form-p58a', 'as' => 'formP58a.'], function () {
    Route::get('/', [FormP58AController::class, 'index'])->name('index');
    Route::get('/create', [FormP58AController::class, 'create'])->name('create');
    Route::post('/store', [FormP58AController::class, 'store'])->name('store');
    Route::get('/edit/{formP58a}', [FormP58AController::class, 'edit'])->name('edit');
    Route::post('/update/{formP58a}', [FormP58AController::class, 'update'])->name('update');
    Route::get('/delete/{formP58a}', [FormP58AController::class, 'delete'])->name('delete');
    Route::get('/pdf/{formP58a}', [FormP58AController::class, 'downloadPdf'])->name('pdf');
});
// End Of FormP58AController Routes

// Beginning Of P58modcController Routes
use BAF\ACR\Http\Controllers\P58modcController;

Route::group(['middleware' => ['web'], 'prefix' => 'p-58-modc', 'as' => 'p58modc.'], function () {

    Route::get('/', [P58modcController::class, 'index'])->name('index');
    Route::get('/create', [P58modcController::class, 'create'])->name('create');
    Route::get('/view/{p58modc}', [P58modcController::class, 'view'])->name('view');
    Route::get('/edit/{p58modc}', [P58modcController::class, 'edit'])->name('edit');
    Route::post('/store', [P58modcController::class, 'store'])->name('store');
    Route::post('/update/{p58modc}', [P58modcController::class, 'update'])->name('update');
    Route::get('/trash/{p58modc}', [P58modcController::class, 'delete'])->name('delete');
    Route::get('/pdf/{p58modc}', [P58modcController::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of P58modcController Routes