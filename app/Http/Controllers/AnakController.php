<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Orangtua;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {
        $data = Anak::with('orangtua')->get();
        return view('pages.anak.index', compact('data'));
    }

    public function create()
    {
        $orangtua = OrangTua::all();
        return view('pages.anak.create', compact('orangtua'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'id_orang_tua' => 'required|exists:tb_orang_tua,id',
        //     'nama' => 'required|max:100',
        //     'nik' => 'required|digits:16|unique:tb_anak,nik',
        //     'tempat_lahir' => 'required|max:50',
        //     'tanggal_lahir' => 'required|date',
        //     'umur_tahun' => 'nullable|integer',
        //     'umur_bulan' => 'nullable|integer',
        //     'JK' => 'required|in:L,P',
        //     'anak_ke' => 'required|integer',
        // ]);

        Anak::create($request->all());

        return redirect()->route('anak.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $anak = Anak::findOrFail($id);
        $orangtua = Orangtua::all();
        return view('pages.anak.edit', compact('anak', 'orangtua'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'id_orang_tua' => 'required|exists:tb_orang_tua,id',
        //     'nama' => 'required|max:100',
        //     'nik' => 'required|digits:16|unique:tb_anak,nik,' . $id,
        //     'tempat_lahir' => 'required|max:50',
        //     'tanggal_lahir' => 'required|date',
        //     'umur_tahun' => 'nullable|integer',
        //     'umur_bulan' => 'nullable|integer',
        //     'JK' => 'required|in:L,P',
        //     'anak_ke' => 'required|integer',
        // ]);

        $anak = Anak::findOrFail($id);
        $anak->update($request->all());

        return redirect()->route('anak.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $anak = Anak::findOrFail($id);
        $anak->delete();

        return redirect()->route('anak.index')->with('success', 'Data berhasil dihapus');
    }
}
