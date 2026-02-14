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

Route::get('/dashboard-admin', function () {
    return view('pages.dashboard-admin.index');
});

Route::get('/status-pesanan', function () {
    return view('pages.order.status-pesanan');
});

Route::get('/redasian', function () {
    return view('pages.red-asian.index');
});

Route::get('/islamicfloral', function () {
    return view('pages.islamic-floral.index');
});

Route::get('/javaauthentic', function () {
    return view('pages.java-authentic.index');
});

Route::get('/mystyrose', function () {
    return view('pages.mysty-rose.index');
});
