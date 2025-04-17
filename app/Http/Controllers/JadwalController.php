<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();
        return view('pages.jadwal.index', compact('data'));
    }

    public function create()
    {
        return view('pages.jadwal.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'aktif' => 'required',
        ]);

        Jadwal::create($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function updateAktif($id)
    {
        $antrian = Jadwal::findOrFail($id);
        $antrian->aktif = 'yes';
        $antrian->save();

        return redirect()->back()->with('success', 'Status hadir diperbarui!');
    }

    public function updateNonAktif($id)
    {
        $antrian = Jadwal::findOrFail($id);
        $antrian->aktif = 'no';
        $antrian->save();

        return redirect()->back()->with('success', 'Status hadir diperbarui!');
    }
}
