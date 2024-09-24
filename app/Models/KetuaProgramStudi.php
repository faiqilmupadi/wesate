<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketuaprogramstudi extends Model
{
    use HasFactory;

    // Mengatur primary key (default di Laravel adalah 'id', jadi kita sesuaikan)
    protected $primaryKey = 'nidn_ketuaprogramstudi';
    public $incrementing = false; // Primary key tipe string, bukan integer yang auto-increment
    
    protected $keyType = 'string'; // Tipe data dari primary key adalah string

    // Tentukan tabel yang terkait dengan model ini (jika nama tabel berbeda dari plural model)
    protected $table = 'ketuaprogramstudi';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nidn_ketuaprogramstudi',
        'nama_ketuaprogramstudi',
        'email',
        'id_programstudi',
        'id_fakultas',
    ];

    // Relasi dengan model User (email adalah foreign key)
    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }

    // Relasi dengan model ProgramStudi (id_programstudi adalah foreign key)
    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'id_programstudi', 'id_programstudi');
    }

    // Relasi dengan model Fakultas (id_fakultas adalah foreign key)
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
    }
}
