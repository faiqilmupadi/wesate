<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangPerkuliahan extends Model
{
    use HasFactory;

    protected $table = 'ruangperkuliahan';

    protected $primaryKey = 'kode_ruang';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'kode_ruang',
        'gedung',
        'kapasitas',
    ];

    // Relasi dengan IRS
    public function irs()
    {
        return $this->hasMany(IRS::class, 'kode_ruang', 'kode_ruang');
    }

    // Relasi dengan Jadwal Kuliah
    public function jadwalKuliah()
    {
        return $this->hasMany(JadwalKuliah::class, 'kode_ruang', 'kode_ruang');
    }

    public function pengalokasianruang()
    {
        return $this->hasMany(PengalokasianRuang::class, 'kode_ruang', 'kode_ruang');
    }
}
