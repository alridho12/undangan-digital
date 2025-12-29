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

Route::get('/info-akun', function () {
    return view('pages.profile.index');
});

Route::get('/order', function () {
    return view('pages.order.index');
});

Route::get('/redasian', function () {
    return view('pages.red-asian.index');
});
