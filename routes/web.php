<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/main', function () {
    return view('pages.main-pages');
});

Route::get('/detail-transactions', function () {
    return view('pages.transactions-detail');
});
