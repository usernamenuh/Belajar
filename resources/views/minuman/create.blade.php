@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Tambah Minuman</h1>
    <form action="{{ route('minuman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_minuman" class="form-label">Nama Minuman</label>
            <input type="text" name="nama_minuman" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenis_minuman" class="form-label">Jenis Minuman</label>
            <select name="jenis_minuman" class="form-control" required>
                <option value="alkohol">Alkohol</option>
                <option value="non-alkohol">Non-Alkohol</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah_minuman" class="form-label">Jumlah Minuman</label>
            <input type="number" name="jumlah_minuman" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('minuman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
