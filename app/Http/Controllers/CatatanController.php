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
}
