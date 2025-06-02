@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h1>Catatan</h1>
        <a href="{{ route('catatan.create') }}" class="btn btn-primary">Tambah Catatan</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>Keterangan</th>
                    <th>Jumlah Main HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catatan as $item => $value)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $value->kegiatan }}</td>
                        <td>{{ $value->keterangan }}</td>
                        <td>{{ $value->jumlah_mainhp }}</td>
                        <td>
                            <a href="{{ route('catatan.edit', $value->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('catatan.destroy', $value->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection