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
        $all = auth()->user()->lecture->students->flatMap->documents->count();
        $valid = auth()->user()->lecture->students->flatMap->documents->where('status', 'Validasi')->count();
        $pending = auth()->user()->lecture->students->flatMap->documents->where('status', 'Menunggu')->count();
        $allStudents = auth()->user()->lecture->students->count();
        $data = [
            'all' => $all,
            'valid' => $valid,
            'pending' => $pending,
            'allStudents' => $allStudents
        ];
        // return view('dsn.index', compact('data'));

        return view("dosen.index", $data);
    }
}
