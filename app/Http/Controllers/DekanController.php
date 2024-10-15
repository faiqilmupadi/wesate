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
        $pengajuans = PengalokasianRuang::all();

        // Kirim data ke view
        return view('dekan.approveruang', compact('pengajuans'));
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
        $pengajuan = PengalokasianRuang::findOrFail($id);

        // Mendapatkan data pengajuan yang ditolak dari session
        $rejectedPengajuans = session('rejected_pengajuans', []);

        // Mendapatkan data pengajuan yang disetujui dari session
        $approvedPengajuans = session('approved_pengajuans', []);

        if ($request->input('action') === 'setuju') {
            // Simpan data pengajuan yang disetujui ke dalam session
            $approvedPengajuans[$id] = ['kode_ruang' => $pengajuan->kode_ruang, 'id_programstudi' => $pengajuan->id_programstudi];
            session(['approved_pengajuans' => $approvedPengajuans]);

            return redirect()->route('dekan.approveruang')->with('message', 'Pengajuan dengan kode ruang ' . $pengajuan->kode_ruang . ' telah disetujui.');
        } elseif ($request->input('action') === 'tolak') {
            // Simpan data pengajuan yang ditolak ke dalam session
            $rejectedPengajuans[$id] = ['kode_ruang' => $pengajuan->kode_ruang, 'id_programstudi' => $pengajuan->id_programstudi];
            session(['rejected_pengajuans' => $rejectedPengajuans]);

            // Hapus pengajuan dari database
            $pengajuan->delete();

            return redirect()->route('dekan.approveruang')->with('message', 'Pengajuan dengan kode ruang ' . $pengajuan->kode_ruang . ' telah ditolak dan dihapus.');
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
                'nama_kelas' => $pengajuan->nama_kelas
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
                'nama_kelas' => $pengajuan->nama_kelas
            ];
            session(['rejected_pengajuans' => $rejectedPengajuans]);

            // Hapus jadwal dari database
            $pengajuan->delete();

            return redirect()->route('dekan.approvejadwal')->with('message', 'Jadwal dengan kode MK ' . $pengajuan->kode_mk . ' telah ditolak dan dihapus.');
        }

        return redirect()->route('dekan.approvejadwal')->with('error', 'Tindakan tidak valid.');
    }
}
