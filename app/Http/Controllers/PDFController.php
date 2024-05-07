<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\LetterType;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function downloadPDF()
    {
        $documents = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
        $dcms = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
        $point = 0;
        foreach ($dcms as $document) {
            $point +=    $document->detailLetterType->point;
        }
        $lts = LetterType::all();
        // return view('pdf.skkm', compact('documents', 'point', 'lts'));
        $pdf = Pdf::loadView('pdf.skkm', compact('documents', 'point', 'lts'))->setPaper('a4', 'landscape');
        return $pdf->download('SKKM.pdf');
    }
}
