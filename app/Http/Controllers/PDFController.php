<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\LetterType;
use Illuminate\Support\Facades\Auth;
// use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfParser\StreamReader;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;
use PDF;

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

        $pdf = PDF::loadView('pdf.skkm', compact('documents', 'dcms', 'point', 'lts'), [], ['mode' => 'utf-8', 'format' => [210, 330], 'orientation' => 'L']);

        // Define the file path to save the PDF
        $fileName = Auth::user()->name . ' Transcript SKKM.pdf';
        $filePath = storage_path('app/public/' . $fileName);

        // Ensure the directory exists
        $directoryPath = storage_path('app/public');
        if (!is_dir($directoryPath)) {
            mkdir($directoryPath, 0755, true); // Create the directory if it doesn't exist
        }

        // Save the PDF file
        $pdf->save($filePath);

        $oMerger = PDFMerger::init();
        $oMerger->addPDF($filePath);


        // return view('pdf.skkm', compact('documents', 'dcms', 'point', 'lts'));
        foreach ($documents as $document) {
            if ($document->status == 'Validasi') {
                $oMerger->addPDF(public_path($document->file));
            }
        }
        $oMerger->merge();
        $oMerger->setFileName('Transkrip SKKM.pdf');
        $oMerger->save('Transkrip SKKM.pdf');
        return $oMerger->download('');
        // $oMerger = PDFMerger::init();
        // $pdf->save(storage_path('app/public/' . Auth::user()->name . ' Transcript SKKM.pdf'));

        // $newFile = storage_path('app/public/' . Auth::user()->name . ' Transcript SKKM.pdf');
        // // add file kedalam oMerger
        // $oMerger->addPDF($newFile);
        // // foreach ($documents as $document) {
        // //     // file asset
        // //     $file = asset($document->file);
        // //     // check if file exists
        // //     if (file_exists(public_path($document->file))) {
        // //         // add file to the merger
        // //         $oMerger->addPDF($file);
        // //     } else {
        // //         echo "File does not exist: $file";
        // //     }
        // // }
        // // merge file
        // $oMerger->merge();
        // // download file
        // $oMerger->download(Auth::user()->name . ' Transcript SKKM.pdf');
    }
}
