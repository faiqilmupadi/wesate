<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    // Tabel yang digunakan oleh model ini
    protected $table = 'matakuliah';

    // Primary key untuk tabel matakuliah
    protected $primaryKey = 'kode_mk';

    // Atribut yang bisa diisi (fillable)
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'nidn_dosenpengampu',
    ];

    // Relasi dengan model KHS
    public function khs()
    {
        return $this->hasMany(KHS::class, 'kode_mk', 'kode_mk');
    }

    public function irs()
    {
        return $this->hasMany(IRS::class, 'kode_mk', 'kode_mk');
    }

    // Relasi dengan model Dosen Pengampu
    public function dosenPengampu()
    {
        return $this->belongsTo(DosenPengampu::class, 'nidn_dosenpengampu', 'nidn_dosenpengampu');
    }

    // Relasi dengan Jadwal Kuliah
    public function jadwalKuliah()
    {
        return $this->hasMany(JadwalKuliah::class, 'kode_mk', 'kode_mk');
    }
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'kode_mk', 'kode_mk');
    }
}
