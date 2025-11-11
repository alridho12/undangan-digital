<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/home', function () {
    return view('pages.home.index');
});

Route::get('/undangan-digital', function () {
    return view('pages.undangan-digital.index');
});

Route::get('/dashboard-customer', function () {
    return view('pages.dashboard-customer.index');
});
