<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $study_programs = [
            'D3 - Gizi',
            'D3 - Kebidanan',
            'D3 - Keperawatan',
            'D3 - Kesehatan Gigi',
            'D3 - Rekam Medis dan Informasi Kesehatan',
            'D3 - Sanitasi',
            'D3 - Teknologi Laboratorium Medis',
            'D4 - Gizi dan Dietetika',
            'D4 - Kebidanan',
            'D4 - Keperawatan',
            'D4 - Keperawatan Anestesiologi',
            'D4 - Kesehatan Lingkungan',
            'D4 - Sanitasi Lingkungan',
            'D4 - Teknologi Laboratorium Medis',
            'D4 - Terapi Gigi',
            'Pendidikan Profesi Bidan',
            'Pendidikan Profesi Dietisien',
            'Pendidikan Profesi Ners',
        ];

        foreach ($study_programs as $study_program) {
            StudyProgram::create([
                'name' => $study_program,
                'head_of_study' => 1,
            ]);
        }
    }
}
