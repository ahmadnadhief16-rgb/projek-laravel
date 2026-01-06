@extends('layouts.app')

@section('content')
<h3>Form Pendaftaran Santri</h3>

<form action="/pendaftaran" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Umur</label>
        <input type="number" name="umur" class="form-control">
    </div>

    <button class="btn btn-success">Daftar</button>
</form>
@endsection