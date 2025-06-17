@extends('layouts.app')
@section('content') 
<div class="container">
    <h1>Daftar Minuman</h1>
    <a href="{{ route('minuman.create') }}" class="btn btn-primary mb-3">Tambah Minuman</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Minuman</th>
                <th>Jenis Minuman</th>
                <th>Jumlah Minuman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($minumen as $minuman)
            <tr>
                <td>{{ $minuman->id }}</td>
                <td>{{ $minuman->nama_minuman }}</td>
                <td>{{ $minuman->jenis_minuman }}</td>
                <td>{{ $minuman->jumlah_minuman }}</td>
                <td>
                    <a href="{{ route('minuman.show', $minuman->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('minuman.edit', $minuman->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('minuman.destroy', $minuman->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection