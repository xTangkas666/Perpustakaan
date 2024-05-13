<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $fillable = [
        'id_anggota',
        'nama',
        'no_hp',
        'alamat',
        'email',
    ];

    protected $primaryKey = 'id_anggota';
}
