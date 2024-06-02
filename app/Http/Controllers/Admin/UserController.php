<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\StudyProgram;
use App\Models\User;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mahasiswaIndex()
    {
        $users = User::where('role', 1)->paginate(5);
        return view('admin.users.mahasiswa.index', compact('users'));
    }

    public function dosenIndex()
    {
        $users = User::where('role', 2)->paginate(5);
        return view('admin.users.dosen.index', compact('users'));
    }

    public function searchMahasiswa(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('role', 1)->where(
            function ($q) use ($query) {
                $q->where('name', 'like', "%$query%");
            }
        )->paginate(5);
        return view('admin.users.mahasiswa.index', compact('users'));
    }

    public function searchDosen(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('role', 2)->where(
            function ($q) use ($query) {
                $q->where('name', 'like', "%$query%");
            }
        )->paginate(5);
        return view('admin.users.dosen.index', compact('users'));
    }
    public function editMahasiswa($id)
    {
        $user = User::find($id);

        $study_programs = StudyProgram::where('id', '!=', $user->student->study_program_id)->get();
        $lectures = Lecture::with('user')->where('id', '!=', $user->student->lecture_id)->get();
        return view('admin.users.mahasiswa.edit', compact('user', 'study_programs', 'lectures'));
    }

    public function editDosen($id)
    {
        $user = User::find($id);
        return view('admin.users.dosen.edit', compact('user'));
    }

    public function updateMahasiswa($id, Request $request)
    {

        $request->validate([
            'nim' => 'required',
            'study_program_id' => 'required',
            'semester' => 'required',
            'lecture_id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = User::find($id);
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

    public function updateDosen($id, Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'name' => 'required',
            'email' => 'required',
            'signature_picture' => 'required'
        ]);
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $fileLama = $user->lecture->signature_picture;

        // if (file_exists(public_path($fileLama))) {
        //     unlink(public_path($fileLama));
        // }
        $file = $request->file('signature_picture');
        $fileServices = new FileService();
        $fileName = $fileServices->uploadFile($file);

        $user->lecture()->update([
            'nip' => $request->nip,
            'signature_picture' => $fileName
        ]);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }




    public function updatePassword($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
            'password' => 'required|min:8',
            'password_confirmation' => 'same:password'
        ]);
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'role' => 'required',
                'password' => 'required|min:8|confirmed',
            ]);

            // store
            $user =      User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ]);

            if ($request->role == 1) {
                Student::create([
                    'user_id' => $user->id,
                ]);
                return redirect()->route('admin.users.mahasiswa.index')->with('success', 'User created successfully');
            } elseif ($request->role == 2) {
                Lecture::create([
                    'user_id' => $user->id,
                ]);
                return redirect()->route('admin.users.dosen.index')->with('success', 'User created successfully');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        // validate

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        // delete
        $user = User::find($id);
        if ($user->student()->exists()) {
            $user->student->delete();
        } elseif ($user->lecture()->exists()) {
            $user->lecture->delete();
        }

        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
