@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Detail Catatan</h3>
        </div>
    </div>
    <div class="card-body">
        <h5>Kegiatan: {{ $catatan->kegiatan }}</h5>
        <p>Keterangan: {{ $catatan->keterangan }}</p>
        <p>Jumlah Main HP: {{ $catatan->jumlah_mainhp }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('catatan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection