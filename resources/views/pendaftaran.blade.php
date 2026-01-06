@extends('layouts.app')

@section('content')
<h2>Pendaftaran Santri</h2>

<form method="POST" action="/pendaftaran">
    @csrf

    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Asal Sekolah</label>
        <input type="text" name="asal_sekolah" class="form-control" required>
    </div>

    <button class="btn btn-success">Daftar</button>
</form>
@endsection
