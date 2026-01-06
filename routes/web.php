<?php

use App\Http\Controllers\SantriController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tata-tertib', function () {
    return view('tata-tertib');
});

Route::get('/pendaftaran', [SantriController::class, 'create']);
Route::post('/pendaftaran', [SantriController::class, 'store']);

Route::get('/santri', [SantriController::class, 'index']);