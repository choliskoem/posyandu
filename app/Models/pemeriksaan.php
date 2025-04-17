<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $table = 'tb_pemeriksaan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_anak',
        'id_orang_tua',
        'tanggal',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'vitamin_A',
        'imunisasi_BCG',
        'imunisasi_DPT_HB1',
        'imunisasi_DPT_HB2',
        'imunisasi_DPT_HB3',
        'catatan',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function orangTua()
    {
        return $this->belongsTo(OrangTua::class, 'id_orang_tua');
    }
}
