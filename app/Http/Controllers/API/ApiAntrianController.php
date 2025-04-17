<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Anak;
use App\Models\Antrian;
use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ApiAntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show($nomor_antrian)
    {
        $antrian = Antrian::where('nomor_antrian', $nomor_antrian)->firstOrFail();
        return response()->json($antrian);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'id_jadwal' => 'required|integer',  // Pastikan id_jadwal berupa integer
            'id_anak' => 'required|integer'     // Pastikan id_anak berupa integer
        ]);
    
        try {
            // Cek apakah anak sudah mendaftar untuk jadwal tertentu
            $existing = Antrian::where('id_anak', $validatedData['id_anak'])
                ->where('id_jadwal', $validatedData['id_jadwal'])
                ->first();
    
            // Jika anak sudah mendaftar untuk jadwal yang sama, tampilkan pesan kesalahan
            if ($existing) {
                return response()->json([
                    'message' => 'Anak ini sudah melakukan pendaftaran untuk jadwal tersebut.'
                ], 409);  // 409: Conflict
            }
    
            // Dapatkan nomor antrian terakhir dan tentukan nomor antrian berikutnya
            $lastAntrian = Antrian::orderBy('nomor_antrian', 'desc')->first();
            $nextNomorAntrian = $lastAntrian ? $lastAntrian->nomor_antrian + 1 : 1;
    
            // Dapatkan waktu antrian terakhir dan tentukan waktu antrian berikutnya
            $lastWaktuAntrian = Antrian::orderBy('waktu_antrian', 'desc')->first();
            $nextWaktuAntrian = $lastWaktuAntrian ? Carbon::parse($lastWaktuAntrian->waktu_antrian)->addMinutes(10) : Carbon::now();
    
            // Tambahkan nomor antrian dan waktu antrian ke dalam data yang valid
            $validatedData['nomor_antrian'] = $nextNomorAntrian;
            $validatedData['waktu_antrian'] = $nextWaktuAntrian;
            $validatedData['hadir'] = 'no';  // Tambahkan nilai hadir
    
            // Simpan data antrian ke dalam database
            $antrian = Antrian::create($validatedData);
    
            // Kembalikan response JSON jika berhasil
            return response()->json($antrian, 201);  // 201: Created
    
        } catch (QueryException $e) {
            // Tangani kesalahan integritas database (seperti duplikat)
            if ($e->getCode() == 23000) {  // Integrity constraint violation
                return response()->json([
                    'message' => 'Anak ini sudah melakukan pendaftaran.'
                ], 409);  // 409: Conflict
            }
    
            // Tangani kesalahan umum saat menyimpan data
            return response()->json([
                'message' => 'Terjadi kesalahan saat menyimpan data.'
            ], 500);  // 500: Internal Server Error
        }
    }
    
    public function getJadwal()
    {
        $jadwal = Jadwal::where('aktif', 'yes')->get(); // Ambil hanya yang aktif
        return response()->json($jadwal);
    }
    public function getAnakByOrangTua($id_orang_tua)
    {
        $anak = Anak::where('id_orang_tua', $id_orang_tua)->get();

        return response()->json($anak);
    }
}
