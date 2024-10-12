<?php

namespace App\Http\Controllers;

use App\Models\RuangPerkuliahan;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class BagianAkademikController extends Controller
{
    public function create()
    {
        return view('penyusunanruang'); 
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode' => 'required|string|max:25|unique:ruang_kelas,kode_ruang',
            'gedung' => 'required|string|max:50',
            'kapasitas' => 'required|integer|min:1',
        ]);

        // Menyimpan data ke dalam tabel ruang kelas
        RuangPerkuliahan::create([
            'kode_ruang' => $request->kode,
            'gedung' => $request->gedung,
            'kapasitas' => $request->kapasitas,
        ]);

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('penyusunanruang.create')->with('success', 'Data ruangan berhasil disimpan.');
    }
}
