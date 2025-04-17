<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Antrian;
use App\Models\Orangtua;
use App\Models\Pemeriksaan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index()
    {
        $pemeriksaan = Pemeriksaan::with(['anak', 'orangTua'])->latest()->get();
        return view('pages.pemeriksaan.index', compact('pemeriksaan'));
    }

    public function create()
    {
        $anak = Antrian::where('hadir', 'yes')
            ->leftJoin('tb_anak as b', 'b.id_anak', '=', 'tb_antrian.id_anak')
            ->select('b.id_anak', 'b.id_orang_tua', 'b.nama', 'tb_antrian.hadir')
            ->get();
        $orang_tua = Orangtua::all();
        return view('pages.pemeriksaan.create', compact('anak', 'orang_tua'));
    }

    public function store(Request $request)
    {
        // Validasi input (opsional)
        // $request->validate([
        //     'anak' => 'required|exists:anak,id',
        //     'id_orang_tua' => 'required|exists:orang_tua,id',
        //     'tanggal' => 'required|date',
        //     'berat_badan' => 'required|numeric',
        //     'tinggi_badan' => 'required|numeric',
        //     'lingkar_kepala' => 'required|numeric',
        //     'vitamin_A' => 'required|in:Ya,Tidak',
        //     'imunisasi_BCG' => 'required|in:Ya,Tidak',
        //     'imunisasi_DPT_HB1' => 'required|in:Ya,Tidak',
        //     'imunisasi_DPT_HB2' => 'required|in:Ya,Tidak',
        //     'imunisasi_DPT_HB3' => 'required|in:Ya,Tidak',
        // ]);

        // Ambil data anak
        $anak = Anak::findOrFail($request->anak);

        // Hitung umur berdasarkan tanggal lahir dan tanggal pemeriksaan
        $tanggal_lahir = Carbon::parse($anak->tanggal_lahir);
        $tanggal_pemeriksaan = Carbon::parse($request->tanggal);

        $umur_tahun = $tanggal_lahir->diffInYears($tanggal_pemeriksaan);
        $umur_bulan_total = $tanggal_lahir->diffInMonths($tanggal_pemeriksaan);
        $umur_bulan = $umur_bulan_total % 12;

        // Update umur di model anak (jika ingin diperbarui)
        $anak->update([
            'umur_tahun' => $umur_tahun,
            'umur_bulan' => $umur_bulan,
        ]);

        // Simpan data pemeriksaan
        $pemeriksaan = Pemeriksaan::create([
            'id_anak' => $request->anak,
            'id_orang_tua' => $request->id_orang_tua,
            'tanggal' => $request->tanggal,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'lingkar_kepala' => $request->lingkar_kepala,
            'vitamin_A' => $request->vitamin_A,
            'imunisasi_BCG' => $request->imunisasi_BCG,
            'imunisasi_DPT_HB1' => $request->imunisasi_DPT_HB1,
            'imunisasi_DPT_HB2' => $request->imunisasi_DPT_HB2,
            'imunisasi_DPT_HB3' => $request->imunisasi_DPT_HB3,
            'catatan' => ''
        ]);

        // Hitung umur dalam bulan
        $age_in_months = $umur_tahun * 12 + $umur_bulan;

        // Ambil nilai inputan untuk status kesehatan
        $bb = $request->berat_badan;
        $tb = $request->tinggi_badan;
        $lk = $request->lingkar_kepala;

        // Hitung status kesehatan
        $healthStatus = $this->getHealthStatus($bb, $tb, $lk, $age_in_months);

        // Update catatan status kesehatan
        $pemeriksaan->update([
            'catatan' => 'Status Kesehatan: ' . $healthStatus
        ]);

        return redirect()->route('pemeriksaan.index')->with('success', 'Data pemeriksaan berhasil disimpan!');
    }

    // Fungsi untuk menentukan status kesehatan berdasarkan BB, TB, LK, dan umur dalam bulan
    private function getHealthStatus($bb, $tb, $lk, $age_in_months)
    {
        // Status Berat Badan
        if ($bb < 12 && $age_in_months <= 24) {
            $bb_status = "Gizi Kurang";
        } elseif ($bb >= 12 && $bb <= 18 && $age_in_months > 24 && $age_in_months <= 60) {
            $bb_status = "Gizi Normal";
        } else {
            $bb_status = "Gizi Lebih";
        }

        // Status Tinggi Badan
        if ($tb < 75 && $age_in_months <= 12) {
            $tb_status = "Stunting";
        } elseif ($tb >= 75) {
            $tb_status = "Normal";
        } else {
            $tb_status = "Tidak Normal";
        }

        // Status Lingkar Kepala (opsional, bisa dikembangkan)
        if ($lk < 30) {
            $lk_status = "Di bawah normal";
        } elseif ($lk >= 30 && $lk <= 50) {
            $lk_status = "Normal";
        } else {
            $lk_status = "Di atas normal";
        }

        // Format catatan yang rapi
        $catatan = "• Berat Badan: $bb_status\n";
        $catatan .= "• Tinggi Badan: $tb_status\n";
        $catatan .= "• Lingkar Kepala: $lk_status\n";

        if ($bb_status == "Gizi Kurang" || $tb_status == "Stunting") {
            $catatan .= " Rekomendasi: Perlu perhatian khusus dan pemantauan lebih lanjut.";
        } else {
            $catatan .= " Anak dalam kondisi sehat dan pertumbuhan normal.";
        }

        return $catatan;
    }
}
