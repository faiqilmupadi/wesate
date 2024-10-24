<?php

namespace App\Http\Controllers;

use App\Models\PengalokasianRuang;
use App\Models\JadwalKuliah;
use Illuminate\Http\Request;

class DekanController extends Controller
{
    public function createPengajuanRuang()
    {
        // Ambil semua pengajuan dari tabel pengalokasianruang
        $pengajuans_ruang = PengalokasianRuang::all();

        // Kirim data ke view
        return view('dekan.approveruang', compact('pengajuans_ruang'));
    }

    public function createPengajuanJadwal()
    {
        // Ambil semua jadwal kuliah yang diajukan dari tabel JadwalKuliah
        $pengajuans = JadwalKuliah::all();

        // Kirim data ke view
        return view('dekan.approvejadwal', compact('pengajuans'));
    }

    // Menyetujui atau menolak pengalokasian ruang (diakses oleh dekan)
    public function updatePengajuanRuang(Request $request, $id)
    {
        $pengajuanruang = PengalokasianRuang::findOrFail($id);

        // Mendapatkan data pengajuan yang ditolak dari session
        $rejectedPengajuansruang = session('rejected_pengajuansruang', []);

        // Mendapatkan data pengajuan yang disetujui dari session
        $approvedPengajuansruang = session('approved_pengajuansruang', []);

        if ($request->input('action') === 'setuju') {
            // Simpan data pengajuan yang disetujui ke dalam session
            $approvedPengajuansruang[$id] = ['kode_ruang' => $pengajuanruang->kode_ruang, 'id_programstudi' => $pengajuanruang->id_programstudi];
            session(['approved_pengajuansruang' => $approvedPengajuansruang]);

            return redirect()->route('dekan.approveruang')->with('message', 'Pengajuan dengan kode ruang ' . $pengajuanruang->kode_ruang . ' telah disetujui.');
        } elseif ($request->input('action') === 'tolak') {
            // Simpan data pengajuan yang ditolak ke dalam session
            $rejectedPengajuansruang[$id] = ['kode_ruang' => $pengajuanruang->kode_ruang, 'id_programstudi' => $pengajuanruang->id_programstudi];
            session(['rejected_pengajuansruang' => $rejectedPengajuansruang]);

            // Hapus pengajuan dari database
            $pengajuanruang->delete();

            return redirect()->route('dekan.approveruang')->with('message', 'Pengajuan dengan kode ruang ' . $pengajuanruang->kode_ruang . ' telah ditolak dan dihapus.');
        }

        return redirect()->route('dekan.approveruang')->with('error', 'Tindakan tidak valid.');
    }

    // Menyetujui atau menolak jadwal kuliah (diakses oleh dekan)
    public function updatePengajuanJadwal(Request $request, $id)
{
    $pengajuan = JadwalKuliah::findOrFail($id);

    // Mendapatkan data jadwal yang ditolak dari session
    $rejectedPengajuans = session('rejected_pengajuans', []);

    // Mendapatkan data jadwal yang disetujui dari session
    $approvedPengajuans = session('approved_pengajuans', []);

    if ($request->input('action') === 'setuju') {
        // Simpan data jadwal yang disetujui ke dalam session
        $approvedPengajuans[$id] = [
            'kode_mk' => $pengajuan->kode_mk,
            'kode_ruang' => $pengajuan->kode_ruang,
            'hari' => $pengajuan->hari,
            'jam' => $pengajuan->jam,
            'nama_kelas' => $pengajuan->nama_kelas,
            'status' => 'disetujui' // Tambahkan status disetujui
        ];
        session(['approved_pengajuans' => $approvedPengajuans]);

        // Update status jadwal menjadi disetujui
        $pengajuan->status = 'disetujui';
        $pengajuan->save();

        return redirect()->route('dekan.approvejadwal')->with('message', 'Jadwal dengan kode MK ' . $pengajuan->kode_mk . ' telah disetujui.');
    } elseif ($request->input('action') === 'tolak') {
        // Simpan data jadwal yang ditolak ke dalam session
        $rejectedPengajuans[$id] = [
            'kode_mk' => $pengajuan->kode_mk,
            'kode_ruang' => $pengajuan->kode_ruang,
            'hari' => $pengajuan->hari,
            'jam' => $pengajuan->jam,
            'nama_kelas' => $pengajuan->nama_kelas,
            'status' => 'ditolak' // Tambahkan status ditolak
        ];
        session(['rejected_pengajuans' => $rejectedPengajuans]);

        // Update status jadwal menjadi ditolak (tanpa menghapus dari database)
        $pengajuan->status = 'ditolak';
        $pengajuan->save();

        return redirect()->route('dekan.approvejadwal')->with('message', 'Jadwal dengan kode MK ' . $pengajuan->kode_mk . ' telah ditolak.');
    }

    return redirect()->route('dekan.approvejadwal')->with('error', 'Tindakan tidak valid.');
}
}