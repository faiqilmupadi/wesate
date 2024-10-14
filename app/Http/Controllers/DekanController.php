<?php

namespace App\Http\Controllers;

use App\Models\PengalokasianRuang;
use Illuminate\Http\Request;

class DekanController extends Controller
{
    public function createPengajuan()
    {
        // Ambil semua pengajuan dari tabel pengalokasianruang
        $pengajuans = PengalokasianRuang::all();

        // Kirim data ke view
        return view('dekan.approveruang', compact('pengajuans'));
    }
    // Menyetujui atau menolak pengalokasian ruang (diakses oleh dekan)
    public function updatePengajuan(Request $request, $id)
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
}
