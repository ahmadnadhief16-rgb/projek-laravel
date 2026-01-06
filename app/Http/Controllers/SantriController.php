<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function create()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $santri = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'umur' => $request->umur
        ];

        $data = session()->get('santri', []);
        $data[] = $santri;

        session(['santri' => $data]);

        return redirect('/santri')->with('success', 'Santri berhasil didaftarkan');
    }

    public function index()
    {
        $santri = session('santri', []);
        return view('santri', compact('santri'));
    }
}