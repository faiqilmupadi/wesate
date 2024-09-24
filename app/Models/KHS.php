<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    use HasFactory;

    protected $table = 'khs';

    
    public $incrementing = false;

    protected $keyType = 'string'; // Tipe primary key adalah string

    protected $fillable = ['nim' , 'nilai', 'kode_mk'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class, 'kode_mk', 'kode_mk');
    }
}
