@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detail Minuman</h1>
    <div class="mb-3">
        <label class="form-label">Nama Minuman:</label>
        <div>{{ $minuman->nama_minuman }}</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Minuman:</label>
        <div>{{ $minuman->jenis_minuman }}</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Jumlah Minuman:</label>
        <div>{{ $minuman->jumlah_minuman }}</div>
    </div>
    <a href="{{ route('minuman.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
