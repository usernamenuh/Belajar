@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Minuman</h1>
    <form action="{{ route('minuman.update', $minuman->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_minuman" class="form-label">Nama Minuman</label>
            <input type="text" name="nama_minuman" class="form-control" value="{{ $minuman->nama_minuman }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_minuman" class="form-label">Jenis Minuman</label>
            <select name="jenis_minuman" class="form-control" required>
                <option value="alkohol" {{ $minuman->jenis_minuman == 'alkohol' ? 'selected' : '' }}>Alkohol</option>
                <option value="non-alkohol" {{ $minuman->jenis_minuman == 'non-alkohol' ? 'selected' : '' }}>Non-Alkohol</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah_minuman" class="form-label">Jumlah Minuman</label>
            <input type="number" name="jumlah_minuman" class="form-control" value="{{ $minuman->jumlah_minuman }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('minuman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
