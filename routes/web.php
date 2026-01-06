<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/tata-tertib', function () {
    return view('tata-tertib');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::post('/pendaftaran', function (Request $request) {
    session([
        'santri' => [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
        ]
    ]);

    return redirect('/hasil');
});

Route::get('/hasil', function () {
    $santri = session('santri');
    return view('hasil', compact('santri'));
});
