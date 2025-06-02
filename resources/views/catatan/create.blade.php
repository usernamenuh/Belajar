@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Catatan</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('catatan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kegiatan" class="form-label">Kegiatan</label>
                    <input type="text" name="kegiatan" class="form-control" id="kegiatan" value="{{ old('kegiatan') }}" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{ old('keterangan') }}" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah_mainhp" class="form-label">Jumlah Main HP</label>
                    <input type="number" name="jumlah_mainhp" class="form-control" id="jumlah_mainhp" value="{{ old('jumlah_mainhp', 0) }}" min="0" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('catatan.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection