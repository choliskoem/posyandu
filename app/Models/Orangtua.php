<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orangtua extends Model
{
    use HasFactory;

    protected $table = 'tb_orang_tua'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key
    public $incrementing = true; // Primary key menggunakan auto-increment
    protected $keyType = 'int'; // Tipe data primary key adalah integer

    protected $fillable = [
        'nama',
        'nik',
        'no_kk',
        'no_hp',
        'alamat',
    ];

    public $timestamps = true; // Menggunakan timestamps (created_at, updated_at)

    /**
     * Relasi ke tabel anak (One to Many)
     */
    public function anak(): HasMany
    {
        return $this->hasMany(Anak::class, 'id_orang_tua', 'id_orang_tua');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id_orang_tua', 'id');
    }
}
