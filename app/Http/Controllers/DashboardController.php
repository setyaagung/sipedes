<?php

namespace App\Http\Controllers;

use App\Model\KartuKeluarga;
use App\Model\Kelahiran;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $kk = KartuKeluarga::count();
        $kelahiran = Kelahiran::count();
        return view('backend.dashboard', compact('users', 'kk', 'kelahiran'));
    }
}
