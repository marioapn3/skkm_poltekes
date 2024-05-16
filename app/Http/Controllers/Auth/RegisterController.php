<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function authRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 1,
        ]);

        Student::create([
            'user_id' => $user->id,

        ]);

        Auth::login($user);
        if ($user->role == 1) {
            return redirect()->route('mhs.dashboard')->with('success', 'Register Berhasil');
        } elseif ($user->role == 2) {
            return redirect()->route('dsn.dashboard')->with('success', 'Register Berhasil');
        } else {
            return redirect()->route('admin.dashboard')->with('success', 'Register Berhasil');
        }
    }

    public function register()
    {
        return view('auth.register');
    }
}
