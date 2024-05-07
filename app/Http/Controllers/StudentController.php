<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Student;
use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $study_programs = StudyProgram::where('id', '!=', Auth::user()->student->study_program_id)->get();
        $lectures = Lecture::with('user')->where('id', '!=', Auth::user()->student->lecture_id)->get();
        return view('mhs.profile.index', compact('lectures', 'study_programs'));
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'study_program_id' => 'required',
            'semester' => 'required',
            'lecture_id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $user->student()->update([
            'nim' => $request->nim,
            'study_program_id' => $request->study_program_id,
            'semester' => $request->semester,
            'lecture_id' => $request->lecture_id,
        ]);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
