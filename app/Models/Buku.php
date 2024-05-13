<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'no_buku',
        'judul',
        'edisi',
        'tahun',
        'penerbit',
    ];

    protected $primaryKey = 'no_buku';
}
