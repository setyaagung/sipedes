<?php

namespace App\Http\Controllers;

use App\Model\KartuKeluarga;
use App\Model\Kelahiran;
use App\Model\Kematian;
use App\Model\Penduduk;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::count();
        $kk = KartuKeluarga::count();
        $kelahiran = Kelahiran::count();
        $kematian = Kematian::count();
        return view('backend.dashboard', compact('penduduk', 'kk', 'kelahiran', 'kematian'));
    }
}
