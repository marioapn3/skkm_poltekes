<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\LetterType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
// use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Barryvdh\DomPDF\Facade\Pdf;
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

        // $pdf = Pdf::loadView('skkm_data', co mpact('documents', 'dcms', 'point', 'lts'), [], ['mode' => 'utf-8', 'format' => [210, 330], 'orientation' => 'L']);
        $user = User::find(Auth::user()->id);
        $signaturePicture1 = $this->convertImageToBase64(public_path($user->student->studyProgram->headStudy->signature_picture));
        $signaturePicture2 = $this->convertImageToBase64(public_path($user->student->lecture->signature_picture));

        $data = [
            'documents' => $documents,
            'dcms' => $dcms,
            'point' => $point,
            'lts' => $lts,
            'signaturePicture1' => $signaturePicture1,
            'signaturePicture2' => $signaturePicture2,
        ];

        // return view('pdf.skkm_dom', $data);
        $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('pdf.skkm_dom', $data)
            ->setPaper('f4', 'landscape');
        // return $pdf->stream();


        $currentDate = Carbon::now()->format('Y-m-d');
        $userName = Auth::user()->name;
        $sanitizedUserName = str_replace(' ', '_', $userName);
        $filepath = $currentDate . '_' . $sanitizedUserName . '.pdf';
        $pdf->save($filepath);

        $filePath = public_path($filepath);

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
        // return $oMerger->download('');
        return $oMerger->stream();
    }

    private function convertImageToBase64($imageUrl)
    {
        $imageData = file_get_contents($imageUrl);
        $base64 = base64_encode($imageData);
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->buffer($imageData);
        return 'data:' . $mimeType . ';base64,' . $base64;
    }
}
