<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catatan;

class CatatanController extends Controller
{
    public function index()
    {
        $catatan = catatan::all();
        return view('catatan.index', compact('catatan'));
    }
    public function create()
    {
        return view('catatan.create');
    }
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'kegiatan' => 'required',
            'keterangan' => 'required',
            'jumlah_mainhp' => 'required|integer|min:0',
        ], [
            'kegiatan.required' => 'Kegiatan harus diisi',
            'keterangan.required' => 'Keterangan harus diisi',
            'jumlah_mainhp.required' => 'Jumlah Main HP harus diisi',
            'jumlah_mainhp.integer' => 'Jumlah Main HP harus berupa angka',
            'jumlah_mainhp.min' => 'Jumlah Main HP harus lebih dari 0',
        ]);

        catatan::create($validated);
        return redirect()->route('catatan.index')->with('success', 'Catatan berhasil ditambahkan');
    }
}
