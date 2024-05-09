<?php

namespace App\Http\Controllers;

use App\Models\DetailLetterType;
use App\Models\LetterType;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function mhsDashboard()
    {
        $all = auth()->user()->student->documents->count();
        $valid = auth()->user()->student->documents->where('status', 'Validasi')->count();
        $reject = auth()->user()->student->documents->where('status', 'Ditolak')->count();
        $pending = auth()->user()->student->documents->where('status', 'Menunggu')->count();

        $Ltypes = LetterType::all();
        return view('mhs.index', compact('all', 'valid', 'reject', 'pending', 'Ltypes'));
    }

    public function dsnDashboard()
    {
        return view("dosen.index");
    }
}
