<?php

// namespace App\Http\Controllers;

// use App\Models\Antrian;
// use Carbon\Carbon;
// use Illuminate\Http\Request;

// class AntrianController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     public function show($nomor_antrian)
//     {
//         $antrian = Antrian::where('nomor_antrian', $nomor_antrian)->firstOrFail();
//         return response()->json($antrian);
//     }
//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//             'id_jadwal' => 'required|integer',
//             'id_anak' => 'required|integer'
//         ]);

//         $lastAntrian = Antrian::orderBy('nomor_antrian', 'desc')->first();
//         $nextNomorAntrian = $lastAntrian ? $lastAntrian->nomor_antrian + 1 : 1;

//         $lastWaktuAntrian = Antrian::orderBy('waktu_antrian', 'desc')->first();
//         $nextWaktuAntrian = $lastWaktuAntrian ? Carbon::parse($lastWaktuAntrian->waktu_antrian)->addMinutes(10) : Carbon::now();

//         $validatedData['nomor_antrian'] = $nextNomorAntrian;
//         $validatedData['waktu_antrian'] = $nextWaktuAntrian;

//         $antrian = Antrian::create($validatedData);
//         return response()->json($antrian, 201);
//     }
// }
