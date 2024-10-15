<?php

namespace App\Http\Controllers;

use App\Models\RuangPerkuliahan;
use App\Models\PengalokasianRuang;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class BagianAkademikController extends Controller
{
    public function createPenyusunanRuang()
    {
        return view('bagianakademik.penyusunanruang');
    }

    // Method untuk menyimpan data
    public function storePenyusunanRuang(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kode' => 'required|string|max:25',
            'gedung' => 'required|string|max:50',
            'kapasitas' => 'required|integer',
        ]);

        try {
            // Simpan data ke tabel ruangperkuliahan
            RuangPerkuliahan::create([
                'kode_ruang' => $validatedData['kode'],
                'gedung' => $validatedData['gedung'],
                'kapasitas' => $validatedData['kapasitas'],
            ]);

            // Redirect setelah sukses
            return redirect()->route('penyusunanruang.create')->with('success', 'Data berhasil disimpan!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Cek apakah error disebabkan oleh pelanggaran unique constraint
            if ($e->errorInfo[1] == 1062) { // 1062 adalah kode error untuk pelanggaran unique constraint
                return redirect()->back()->with('error', 'Kode Ruang sudah pernah ditambahkan.');
            }
            // Tangkap error lainnya
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }
    }


    // Menampilkan form penyusunan ruang
    public function createPengalokasianRuang()
    {
        // Mengambil data dari tabel ruangperkuliahan dan program_studi
        $ruangPerkuliahan = RuangPerkuliahan::all();
        $programStudi = ProgramStudi::all();

        return view('bagianakademik.pengalokasianruang', compact('ruangPerkuliahan', 'programStudi'));
    }

    // Menyimpan data pengalokasian ruang ke tabel
    public function storePengalokasianRuang(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'kode_ruang' => 'required|string|exists:ruangperkuliahan,kode_ruang',
                'id_programstudi' => 'required|integer|exists:program_studi,id_programstudi',
            ]);

            // Menyimpan data ke tabel pengalokasianruang
            PengalokasianRuang::create([
                'kode_ruang' => $validatedData['kode_ruang'],
                'id_programstudi' => $validatedData['id_programstudi'],
            ]);

            return redirect()->back()->with('successAjukan', 'Pengalokasian ruang telah diajukan ke dekan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
