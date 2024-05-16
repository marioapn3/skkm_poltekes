<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'signature_picture' => 'required'
        ]);
        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $fileLama = $user->lecture->signature_picture;

        if (file_exists(public_path($fileLama))) {
            unlink(public_path($fileLama));
        }


        $file = $request->file('signature_picture');
        $originalFilename = $file->getClientOriginalName();
        $path = $file->storeAs('public/signature', $originalFilename);
        $fileName = 'storage/' . str_replace('public/', '', $path);
        $user->lecture()->update([
            'nip' => $request->nip,
            'signature_picture' => $fileName
        ]);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
