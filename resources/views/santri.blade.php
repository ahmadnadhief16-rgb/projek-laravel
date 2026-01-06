@extends('layouts.app')

@section('content')
<h3>Data Santri Terdaftar</h3>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Umur</th>
    </tr>

    @foreach($santri as $s)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s['nama'] }}</td>
        <td>{{ $s['alamat'] }}</td>
        <td>{{ $s['umur'] }}</td>
    </tr>
    @endforeach
</table>
@endsection