<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'tb_antrian';
    protected $primaryKey = 'id_antrian';
    public $timestamps = true;

    protected $fillable = [
        'id_jadwal',
        'id_anak',
        'waktu_antrian',
        'nomor_antrian',
        'hadir'
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak', 'id_anak');
    }
}
