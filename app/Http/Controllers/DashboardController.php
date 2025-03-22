<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posyandu;
use App\Models\Pemeriksaan;

class DashboardController extends Controller
{
    public function index()
    {
        return view( 'home');
        }
}
