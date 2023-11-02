<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home_karyawan()
    {
        return view('dashboard.dashboard');
    }
}
