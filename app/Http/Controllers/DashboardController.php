<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\mahasiswa;

class DashboardController extends Controller
{
    function index()
    {
        $jumlah_mahasiswa = mahasiswa::all()->count();
        $jumlah_jurusan = Jurusan::all()->count();
        $jumlah_dosen = Dosen::all()->count();
        return view('dashboard.index', compact('jumlah_mahasiswa', 'jumlah_jurusan', 'jumlah_dosen'));
    }
}
