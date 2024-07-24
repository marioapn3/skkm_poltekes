<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LectureController extends Controller
{
    public function index()
    {
        return view('dosen.profile.index');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'name' => 'required',
            'email' => 'required',
            'signature_picture' => 'nullable'
        ]);
        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);



        if ($request->hasFile('signature_picture')) {

            $fileLama = $user->lecture->signature_picture;

            if (file_exists(public_path($fileLama))) {
                unlink(public_path($fileLama));
            }
            
            $file = $request->file('signature_picture');
            $fileServices = new FileService();
            $fileName = $fileServices->uploadFile($file);
            $user->lecture()->update([
                'nip' => $request->nip,
                'signature_picture' => $fileName
            ]);
        } else {
            $user->lecture()->update([
                'nip' => $request->nip
            ]);
        }

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
