<?php

namespace App\Http\Controllers;

use App\Models\pemeriksaan;
use Illuminate\Http\Request;

class ApiPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showByIdOrangTua($id_orang_tua)
    {
        $pemeriksaan = Pemeriksaan::select('tb_anak.nama', 'tb_anak.nik', 'tb_anak.JK', 'tb_anak.anak_ke', 'tb_pemeriksaan.*')
        ->leftJoin('tb_anak', 'tb_anak.id_anak', '=', 'tb_pemeriksaan.id_anak')
        ->where('tb_pemeriksaan.id_orang_tua', $id_orang_tua)
        ->get();

        if ($pemeriksaan->isEmpty()) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($pemeriksaan, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemeriksaan $pemeriksaan)
    {
        //
    }
}
