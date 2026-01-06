@extends('layouts.app')

@section('content')
<h2>Hasil Pendaftaran</h2>

@if($santri)
<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{ $santri['nama'] }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $santri['alamat'] }}</td>
    </tr>
    <tr>
        <th>Asal Sekolah</th>
        <td>{{ $santri['asal_sekolah'] }}</td>
    </tr>
</table>
@else
<p>Data santri tidak ditemukan.</p>
@endif
@endsection
