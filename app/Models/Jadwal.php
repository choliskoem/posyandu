<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal'; // Nama tabel di database

    protected $primaryKey = 'id_jadwal'; // Primary key

    public $timestamps = true; // Menggunakan created_at & updated_at

    protected $fillable = [
        'tanggal',
        'bulan',
        'tahun'
    ];
}
