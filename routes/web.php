<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'loginPage')->name('login');
    Route::get('/main', 'mainPage')->name('main-page');
    Route::get('/detail-transactions', 'detailTransactions')->name('transactions-detail');
});

Route::post('/main', [LoginController::class, 'handleLogin']);
