<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'tb_anak'; // Nama tabel di database
    protected $primaryKey = 'id_anak'; // Primary key

    protected $fillable = [
        'id_orang_tua',
        'nama',
        'nik',
        'TTL',
        'umur_tahun',
        'umur_bulan',
        'JK',
        'anak_ke',
    ];

    public $timestamps = true; // Menggunakan timestamps (created_at, updated_at)

    /**
     * Relasi ke tabel orang_tua
     */
    public function orangTua()
    {
        return $this->belongsTo(OrangTua::class, 'id_orang_tua', 'id_orang_tua');
    }
}
