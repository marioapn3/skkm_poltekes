<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\LetterType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;
// use PDF;
// use PDF;

class PDFController extends Controller
{
    public function downloadPDF()
    {
        if (
            Auth::user()->student->lecture_id == null ||
            Auth::user()->student->study_program_id == null ||
            Auth::user()->student->semester == null ||
            Auth::user()->student->nim == null
        ) {
            return redirect()->back()->with('error', 'Lengkapi data diri terlebih dahulu');
        }
        $documents = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
        $dcms = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
        $point = 0;
        foreach ($dcms as $document) {
            $point +=    $document->detailLetterType->point;
        }
        $lts = LetterType::all();

        $pdf = PDF::loadView('skkm_data', compact('documents', 'dcms', 'point', 'lts'), [], ['mode' => 'utf-8', 'format' => [210, 330], 'orientation' => 'L']);
        // $currentDate = Carbon::now()->format('Y-m-d');
        // $userName = Auth::user()->name;
        // $sanitizedUserName = str_replace(' ', '_', $userName);
        // $filePath = storage_path("app/public/{$currentDate}_{$sanitizedUserName}.pdf");

        // $pdf->save($filePath);


        // $oMerger = PDFMerger::init();
        // $oMerger->addPDF($filePath);


        // // return view('pdf.skkm', compact('documents', 'dcms', 'point', 'lts'));
        // foreach ($documents as $document) {
        //     if ($document->status == 'Validasi') {
        //         $oMerger->addPDF(public_path($document->file));
        //     }
        // }
        // $oMerger->merge();
        // $oMerger->setFileName('Transkrip SKKM.pdf');
        // $oMerger->save('Transkrip SKKM.pdf');
        // return $oMerger->download('');
        $pdf->stream('Transkrip SKKM.pdf');
    }
}
