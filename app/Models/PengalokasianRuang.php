<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalokasianRuang extends Model
{
    use HasFactory;

    // Tabel yang digunakan oleh model ini
    protected $table = 'pengalokasianruang';

    public $incrementing = false;

    // Atribut yang bisa diisi (fillable)
    protected $fillable = [
        'kode_ruang',
        'nama_programstudi',
    ];

    // Relasi dengan model Dosen Pengampu
    public function ruangperkuliahan()
    {
        return $this->belongsTo(RuangPerkuliahan::class, 'kode_ruang', 'kode_ruang');
    }

}
