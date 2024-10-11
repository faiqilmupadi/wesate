<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenPengampu;
use App\Models\MataKuliah;

class KetuaProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosenpengampu = DosenPengampu::all();
        return view('ketuaprogramstudi.memilihmatakuliah', compact('dosenpengampu'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_mk' => 'required|string|max:10|unique:matakuliah,kode_mk',
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
            'nidn_dosenpengampu' => 'required|exists:dosenpengampu,nidn_dosenpengampu', // Validasi dropdown dosen
        ]);

        // Simpan data ke dalam tabel matakuliah
        MataKuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'nidn_dosenpengampu' => $request->nidn_dosenpengampu, // Menyimpan dosen pengampu
        ]);

        // Redirect ke halaman daftar mata kuliah dengan pesan sukses
        return redirect()->route('memilihmatakuliah.create')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show($kode_mk)
    {
        // Cari mata kuliah berdasarkan kode_mk
        $mata_kuliah = MataKuliah::where('kode_mk', $kode_mk)->firstOrFail();

        // Cari dosen pengampu berdasarkan nidn yang ada di mata kuliah
        $dosenpengampu = DosenPengampu::find($mata_kuliah->nidn_dosenpengampu);

        // Kirim data mata kuliah dan dosen pengampu ke view
        return view('memilihmatakuliah', compact('mata_kuliah', 'dosenpengampu'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode_mk)
    {
        // Ambil data mata kuliah berdasarkan ID
        $mataKuliah = MataKuliah::findOrFail($kode_mk);

        // Ambil semua dosen pengampu untuk dropdown
        $dosenpengampu = DosenPengampu::all();

        // Kirim data mata kuliah dan dosen pengampu ke view edit
        return view('memilihmatakuliah', compact('mataKuliah', 'dosenpengampu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kode_mk)
    {
        // Validasi input
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
            'nidn_dosenpengampu' => 'required|exists:dosenpengampu,nidn_dosenpengampu',
        ]);

        // Cari data mata kuliah yang ingin diupdate
        $mataKuliah = MataKuliah::findOrFail($kode_mk);

        // Update data
        $mataKuliah->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'nidn_dosenpengampu' => $request->nidn_dosenpengampu, // Update dosen pengampu
        ]);

        // Redirect ke halaman daftar mata kuliah dengan pesan sukses
        return redirect()->route('memilihmatakuliah.create')->with('success', 'Mata kuliah berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode_mk)
    {
        $mataKuliah = MataKuliah::findOrFail($kode_mk);
        $mataKuliah->delete();

        // Redirect ke halaman daftar mata kuliah dengan pesan sukses
        return redirect()->route('memilihmatakuliah.create')->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
