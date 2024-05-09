<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\LetterType;
use Illuminate\Support\Facades\Auth;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;
use Mpdf\Mpdf;
use PDF;

class PDFController extends Controller
{
    // public function downloadPDF()
    // {
    //     $documents = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
    //     $dcms = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
    //     $point = 0;
    //     foreach ($dcms as $document) {
    //         $point +=    $document->detailLetterType->point;
    //     }
    //     $lts = LetterType::all();
    //     // return view('pdf.skkm', compact('documents', 'point', 'lts'));
    //     $pdf = Pdf::loadView('pdf.skkm', compact('documents', 'point', 'lts'))->setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif'])->setPaper('f4', 'landscape');
    //     return $pdf->download('SKKM.pdf');

    //     // PDF::
    //     // return view('pdf.skkm', compact('documents', 'point', 'lts'));
    // }

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
        // $pdf = PDF::loadView('pdf.skkm', compact('documents', 'point', 'lts'))->setOptions(['dpi' => 150, 'isHtml5ParserEnabled' => true, 'defaultFont' => 'sans-serif'])->setPaper('f4', 'landscape');
        // return $pdf->download('SKKM.pdf');
        $pdf = LaravelMpdf::loadView('pdf.skkm', compact('documents', 'dcms', 'point', 'lts'), [], ['mode' => 'utf-8', 'format' => [210, 330], 'orientation' => 'L']);

        return $pdf->stream(Auth::user()->name  . ' Transcript SKKM.pdf');


        // PDF::
        // return view('pdf.skkm', compact('documents', 'point', 'lts'));
    }
}
