<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiProfileController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $profile = DB::table('users as u')
            ->leftJoin('tb_orang_tua as ot', 'ot.id', '=', 'u.id_orang_tua')
            ->select('ot.id', 'ot.nama', 'u.noKK', 'ot.nik', 'ot.alamat', 'ot.no_hp')
            ->where('ot.id', '=', $id)
            ->first();

        if ($profile) {
            return response()->json($profile);
        } else {
            return response()->json(['message' => 'Profile not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
