<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    public function index()
    {
        $data = OrangTua::all();
        return view('pages.orangtua.index', compact('data'));
    }

    public function create()
    {
        return view('pages.orangtua.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'nik' => 'required|digits:16|unique:tb_orang_tua,nik',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string|max:15',
        ]);

        OrangTua::create($request->all());

        return redirect()->route('orangtua.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $orangtua = OrangTua::findOrFail($id);
        return view('pages.orangtua.edit', compact('orangtua'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'nama' => 'required|max:100',
        //     'nik' => 'required|digits:16|unique:tb_orang_tua,nik,' . $id,
        //     'alamat' => 'nullable|string',
        //     'no_hp' => 'nullable|string|max:15',
        // ]);

        $orangtua = OrangTua::findOrFail($id);
        $orangtua->update($request->all());

        return redirect()->route('orangtua.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $orangtua = Orangtua::findOrFail($id);
        $orangtua->delete();

        return redirect()->route('orangtua.index')->with('success', 'Data berhasil dihapus');
    }
}
