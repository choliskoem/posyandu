<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function form()
    {
        return view('pages.surat.create');
    }

  

    public function upload(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file' => 'required|mimes:pdf|max:2048',
        ]);
    
        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/surat', $filename);
    
        // Ambil data surat pertama (anggap hanya satu data yang disimpan)
        $surat = Surat::first();
    
        if ($surat) {
            // Hapus file lama jika ada
            Storage::delete('public/surat/' . $surat->file);
    
            // Update data lama
            $surat->update([
                'judul' => $request->judul,
                'file' => $filename,
            ]);
        } else {
            // Jika belum ada data, buat baru
            Surat::create([
                'judul' => $request->judul,
                'file' => $filename,
            ]);
        }
    
        return redirect()->route('surat.index')->with('success', 'Surat berhasil diunggah.');
    }
    
    public function index()
    {
        $surats = Surat::all();
        return view('pages.surat.index', compact('surats'));
    }
}
