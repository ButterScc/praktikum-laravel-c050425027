<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halaman Utama';
});

Route::get('/artikel', function () {
    return 'Halaman Artikel';
});