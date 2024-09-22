<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaprodi extends Model
{
    use HasFactory;

    protected $table = 'kaprodi';
    protected $primaryKey = 'nidn';

    protected $fillable = ['nidn', 'nama', 'email'];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
