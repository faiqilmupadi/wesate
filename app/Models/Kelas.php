<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'nama_kelas';
    protected $fillable = [
        'nama_kelas',
        'kapasitas',
    ];

    // Relasi dengan IRS
    public function irs()
    {
        return $this->hasMany(IRS::class, 'nama_kelas', 'nama_kelas');
    }
    // Relasi dengan Jadwal Kuliah
    public function jadwalKuliah()
    {
        return $this->hasMany(JadwalKuliah::class, 'nama_kelas', 'nama_kelas');
    }
}
