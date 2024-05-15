<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/detail-transactions', function () {
    return view('pages.transactions-detail');
});

Route::get('/all-menu', function () {
    return view('pages.category.allMenu');
});

Route::get('/foods', function () {
    return view('pages.category.foods');
});

Route::get('/drinks', function () {
    return view('pages.category.drinks');
});

Route::get('/vegetables', function () {
    return view('pages.category.vegetables');
});

Route::get('/meat', function () {
    return view('pages.category.meat');
});

Route::get('/cake', function () {
    return view('pages.category.cake');
});

Route::get('/fruit', function () {
    return view('pages.category.fruit');
});
