<?php

namespace App\Http\Controllers;

use App\Models\RuangPerkuliahan;
use Illuminate\Http\Request;

class BagianAkademikController extends Controller
{
    public function create()
    {
        return view('bagianakademik.penyusunanruang');
    }

    // Method untuk menyimpan data
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kode' => 'required|string|max:25|unique:ruangperkuliahan,kode_ruang',
            'gedung' => 'required|string|max:50',
            'kapasitas' => 'required|integer',
        ]);
    
        // Simpan data ke tabel ruangperkuliahan
        RuangPerkuliahan::create([
            'kode_ruang' => $validatedData['kode'],
            'gedung' => $validatedData['gedung'],
            'kapasitas' => $validatedData['kapasitas'],
        ]);
    
        // Redirect setelah sukses
        return redirect()->route('penyusunanruang.create')->with('success', 'Data berhasil disimpan!');
    }
    
    
}
