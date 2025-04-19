<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiSuratController extends Controller
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
    public function showPdf()
    {
        $surat = Surat::first(); // Ambil file terbaru, bisa disesuaikan

        if (!$surat || !Storage::exists('public/surat/' . $surat->file)) {
            return response()->json(['message' => 'File tidak ditemukan.'], 404);
        }

        $filePath = storage_path('app/public/surat/' . $surat->file);
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(surat $surat)
    {
        //
    }
}
