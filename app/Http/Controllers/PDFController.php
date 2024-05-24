<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\LetterType;
use Illuminate\Support\Facades\Auth;
// use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfParser\StreamReader;
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
        return $pdf->download(Auth::user()->name  . ' Transcript SKKM.pdf');
        
        // foreach($dcms as $dcm){
        //    asset($dcm->file) ;
        // }

        // // return $pdf->download(Auth::user()->name  . ' Transcript SKKM.pdf');
        //   // Save the generated PDF to a temporary file
        //   $generatedPdfPath = storage_path('app/public/temp/generated_pdf.pdf');
        //   file_put_contents($generatedPdfPath, $pdf->output());

        //   // Initialize FPDI
        //   $fpdi = new Fpdi();

        //   // Add the generated PDF
        //   $pageCount = $fpdi->setSourceFile($generatedPdfPath);
        //   for ($page = 1; $page <= $pageCount; $page++) {
        //       $templateId = $fpdi->importPage($page);
        //       $size = $fpdi->getTemplateSize($templateId);
        //       $fpdi->AddPage($size['orientation'], [$size['width'], $size['height']]);
        //       $fpdi->useTemplate($templateId);
        //   }

        //   foreach ($documents as $document) {
        //     $filePath = storage_path('app/public/' . $document->file); // Adjust the path according to your setup
        //     if (file_exists($filePath)) {
        //         $pageCount = $fpdi->setSourceFile($filePath);
        //         for ($page = 1; $page <= $pageCount; $page++) {
        //             $templateId = $fpdi->importPage($page);
        //             $size = $fpdi->getTemplateSize($templateId);
        //             $fpdi->AddPage($size['orientation'], [$size['width'], $size['height']]);
        //             $fpdi->useTemplate($templateId);
        //         }
        //     }
        // }

        // // Output the final PDF
        // $output = $fpdi->Output('S');

        // // Send the response to the browser
        // $finalPdfName = Auth::user()->name . ' Transcript SKKM.pdf';

        // return response($output, 200)
        //     ->header('Content-Type', 'application/pdf')
        //     ->header('Content-Disposition', "attachment; filename=\"{$finalPdfName}\"");

    }

}
