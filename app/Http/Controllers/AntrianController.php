<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id_jadwal = $request->input('id_jadwal');

        $query = DB::table('tb_antrian as a')
            ->leftJoin('tb_anak as b', 'a.id_anak', '=', 'b.id_anak')
            ->select('a.id_antrian', 'b.nama', 'a.nomor_antrian', 'a.hadir');

        if ($id_jadwal) {
            $query->where('a.id_jadwal', $id_jadwal);
        }

        $data = $query->get();

        $jadwals = Jadwal::orderBy('tanggal', 'desc')->get();

        return view('pages.antrian.index', compact('data', 'jadwals'));
    }

    public function updateHadir($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->hadir = 'yes';
        $antrian->save();

        return redirect()->back()->with('success', 'Status hadir diperbarui!');
    }
}
