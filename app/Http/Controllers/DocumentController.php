<?php

namespace App\Http\Controllers;

use App\Models\DetailLetterType;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class DocumentController extends Controller
{
    // SKKM
    public function index()
    {
        $detailLetterTypes = DetailLetterType::all();
        $documents = Document::where('student_id', auth()->user()->student->id)->paginate(5);
        return view('mhs.skkm.index', compact('detailLetterTypes', 'documents'));
    }

    public function searchIndex(Request $request)
    {
        $query = $request->input('query');
        $detailLetterTypes = DetailLetterType::all();
        $documents = Document::where('student_id', auth()->user()->student->id)
            ->where('status', 'Validasi')
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', "%$query%");
            })
            ->paginate(5);
        return view('mhs.skkm.index', compact('detailLetterTypes', 'documents'));
    }

    public function uploadSKKM(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'file' => 'required|max:2048',
                'no' => 'required',
                'detail_letter_type_id' => 'required'
            ], [
                'name.required' => 'Nama harus diisi.',
                'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
                'file.required' => 'File harus diunggah.',
                'file.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
                'no.required' => 'Nomor harus diisi.',
                'detail_letter_type_id.required' => 'ID jenis surat harus diisi.'
            ]);

            $file = $request->file('file');
            $originalFilename = $file->getClientOriginalName();
            $path = $file->storeAs('public/skkm', $originalFilename);
            $fileName = 'storage/' . str_replace('public/', '', $path);
            Document::create([
                'name' => $request->name,
                'file' => $fileName,
                'no' => $request->no,
                'detail_letter_type_id' => $request->detail_letter_type_id,
                'student_id' => auth()->user()->student->id,
            ]);
            return redirect()->back()->with('success', 'File uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateSKKM(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'file' => 'max:2048',
                'no' => 'required',
                'detail_letter_type_id' => 'required',
                'document_id' => 'required'
            ], [
                'name.required' => 'Nama harus diisi.',
                'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
                'file.required' => 'File harus diunggah.',
                'file.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
                'no.required' => 'Nomor harus diisi.',
                'detail_letter_type_id.required' => 'ID jenis surat harus diisi.'
            ]);
            if ($request->file('file') != null) {
                $file = $request->file('file');
                $originalFilename = $file->getClientOriginalName();
                $path = $file->storeAs('public/skkm', $originalFilename);
                $fileName = 'storage/' . str_replace('public/', '', $path);
            }
            $document = Document::find($request->document_id);
            $document->update([
                'name' => $request->name,
                'file' => $request->file('file') != null ? $fileName : $document->file,
                'no' => $request->no,
                'detail_letter_type_id' => $request->detail_letter_type_id,
            ]);

            return redirect()->route('mhs.skkm.index')->with('success', 'File uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteSKKM(Request $request)
    {
        $id = $request->id;
        $document = Document::find($id);
        $document->delete();
        return redirect()->back()->with('success', 'File deleted successfully');
    }

    public function editSKKM(Document $document)
    {
        if (Auth::user()->id != $document->student->user_id) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses');
        }
        $detailLetterTypes = DetailLetterType::where('id', '!=', $document->detail_letter_type_id)->get();
        return view('mhs.skkm.edit', compact('document', 'detailLetterTypes'));
    }
    // END SKKM

    // Transkrip SKKM
    public function transcriptSKKM()
    {
        $documents = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->paginate(5);
        $dcms = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
        $point = 0;
        foreach ($dcms as $document) {
            $point +=    $document->detailLetterType->point;
        }
        return view('mhs.transcript.index', compact('documents', 'point'));
    }
    public function searchTranscriptSKKM(Request $request)
    {
        $query = $request->input('query');

        $documents = Document::where('student_id', auth()->user()->student->id)
            ->where('status', 'Validasi')
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', "%$query%");
            })
            ->paginate(5);
        $dcms = Document::where('student_id', auth()->user()->student->id)->where('status', 'Validasi')->get();
        $point = 0;
        foreach ($dcms as $document) {
            $point +=    $document->detailLetterType->point;
        }
        return view('mhs.transcript.index', compact('documents', 'point'));
    }



    // END Transkrip SKKM

    // SKKM DOSEN
    public function skkmDosen()
    {
        $documents = Document::whereHas('student', function ($query) {
            $query->where('lecture_id', auth()->user()->lecture->id);
        })->paginate(5);
        return view('dosen.skkm.index', compact('documents'));
    }


    public function validateSKKM(Request $request)
    {
        $id = $request->id;
        if (Auth::user()->lecture->id == null) {
            return redirect()->back()->with('error', 'Dosen belum diatur');
        }
        $document = Document::find($id);
        $document->update([
            'status' => 'Validasi',
        ]);
        return redirect()->back()->with('success', 'File validated successfully');
    }
    public function rejectSKKM(Request $request)
    {
        $id = $request->id;
        if (Auth::user()->lecture->id == null) {
            return redirect()->back()->with('error', 'Dosen belum diatur');
        }
        $document = Document::find($id);
        $document->update([
            'status' => 'Ditolak',
        ]);
        return redirect()->back()->with('success', 'File rejected successfully');
    }

    // END SKKM DOSEN
}
