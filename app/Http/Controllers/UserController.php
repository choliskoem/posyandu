<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('orangTua')->get();
        return view('pages.user.index', compact('users'));
    }

    public function create()
    {
        $orangTua = Orangtua::all();
        return view('pages.user.create', compact('orangTua'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'noKK' => 'required|string|max:16|unique:users,noKK',
            'password' => 'required|string|min:6',
            'level' => 'required|in:kader,masyarakat',
            'id_orang_tua' => 'nullable|exists:tb_orang_tua,id'
        ]);

        User::create([
            'name' => $request->name,
            'noKK' => $request->noKK,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'id_orang_tua' => $request->id_orang_tua,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }
}
