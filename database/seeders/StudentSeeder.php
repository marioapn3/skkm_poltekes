<?php

namespace Database\Seeders;

use App\Models\Lecture;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = User::create([
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'role' => 1,
            'password' => Hash::make('password'),
        ]);
        $lecture_usr = User::create([
            'name' => 'Lecture',
            'email' => 'lecture@gmail.com',
            'role' => 2,
            'password' => Hash::make('password'),
        ]);

        $lecture = Lecture::create([
            'user_id' => $lecture_usr->id,
            'nip' => '1234567890',
            // 'department' => 'Computer Science',
        ]);

        Student::create([
            'user_id' => $student->id,
            // 'lecture_id' => $lecture->id,
            // 'nim' => '1234567890',
            // 'department' => 'Computer Science',
            // 'batch' => '2019',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@poltekes.com',
            'role' => 3,
            'password' => Hash::make('password'),
        ]);
    }
}
