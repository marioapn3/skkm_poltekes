<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class StudyProgramController extends Controller
{
    public function index(){
        $studyPrograms = StudyProgram::paginate(5);
        $lectures = Lecture::all();
        return view('admin.study_programs.index' , compact('studyPrograms','lectures'));
    }

    public function search(Request $request){
        $query = $request->input('query');
        $studyPrograms = StudyProgram::where(
            function ($q) use ($query) {
                $q->where('name', 'like', "%$query%");
            }
        )->paginate(5);
        return view('admin.study_programs.index' , compact('studyPrograms'));
    }

    public function edit($id){
        $lectures = Lecture::all();
        $studyProgram = StudyProgram::find($id);
        return view('admin.study_programs.edit' , compact('lectures' , 'studyProgram'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'name' => 'required',
            'head_of_study' => 'required'
        ]);
        $studyProgram =  StudyProgram::find($id);
        $studyProgram->update([
            'name' => $request->name,
            'head_of_study' => $request->head_of_study
        ]);
        return redirect()->route('admin.study-program.index')->with('success', 'Study Program berhasil diperbarui');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'head_of_study' => 'required'
        ]);

        StudyProgram::create([
            'name' => $request->name,
            'head_of_study' => $request->head_of_study
        ]);

        return redirect()->route('admin.study-program.index')->with('success', 'Study Program berhasil ditambahkan');
    }

    public function delete(Request $request){
        $studyProgram = StudyProgram::find($request->id);
        $studyProgram->delete();
        return redirect()->back()->with('success', 'Study Program berhasil dihapus');
    }

    public function create(){
        $lectures = Lecture::all();
        return view('admin.study_programs.create' , compact('lectures'));
    }
}
