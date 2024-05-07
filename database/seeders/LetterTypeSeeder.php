<?php

namespace Database\Seeders;

use App\Models\DetailLetterType;
use App\Models\LetterType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wajib = [
            [
                'type' => 'Kegiatan Wajib',
                'activity_name' => 'PKKMB',
            ],
            [
                'type' => 'Kegiatan Wajib',
                'activity_name' => 'SBH',
            ],
            [
                'type' => 'Kegiatan Wajib',
                'activity_name' => 'LDK',
            ],
            [
                'type' => 'Kegiatan Wajib',
                'activity_name' => 'TOEFL',
            ],
            [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Kepengurusan organisasi',
            ],
            [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Kepanitiaan',
            ],
            [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Kejuaraan/kompetensi/Perlombaan',
            ], [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Penelitian, Pengabdian Masyarakat, Seminar,Kuliah Tamu dan Kegiatan Ilmiah Lainnya',
            ], [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Penghargaan Akademik dan Non Akademik',
            ], [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Hak Paten, Hak Cipta',
            ], [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Pertandingan Persahabatan',
            ], [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Kegiatan Penunjang Akademik',
            ],
            [
                'type' => 'Kegiatan Pilihan',
                'activity_name' => 'Kegiatan Insidentil',
            ],
        ];

        foreach ($wajib as $data) {
            LetterType::create($data);
        }

        $kegiatan = [
            [
                'letter_type_id' => 1,
                'activity_level' => 'POLTEKKES',
                'point' => 2,
            ],
            [
                'letter_type_id' => 2,
                'activity_level' => 'POLTEKKES',
                'point' => 2,
            ], [
                'letter_type_id' => 3,
                'activity_level' => 'POLTEKKES',
                'point' => 2,
            ], [
                'letter_type_id' => 4,
                'activity_level' => 'POLTEKKES',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Ketua',
                'point' => 4,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Sekretaris',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Bendhara',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 2,
            ],
            [
                'letter_type_id' => 5,
                'activity_level' => 'Nasional',
                'sub_activity_level' => 'Ketua',
                'point' => 3,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'Nasional',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'Nasional',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'Nasional',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'Nasional',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'Nasional',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],


            [
                'letter_type_id' => 5,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],


            [
                'letter_type_id' => 5,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],

            [
                'letter_type_id' => 5,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],

            [
                'letter_type_id' => 5,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],

            [
                'letter_type_id' => 5,
                'activity_level' => 'TINGKAT RT/RW',
                'sub_activity_level' => 'Ketua',
                'point' => 0.5,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'TINGKAT RT/RW',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 0.5,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'TINGKAT RT/RW',
                'sub_activity_level' => 'Sekretaris',
                'point' => 0.5,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'TINGKAT RT/RW',
                'sub_activity_level' => 'Bendhara',
                'point' => 0.5,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'TINGKAT RT/RW',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 0.5,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'TINGKAT RT/RW',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 0.5,
            ],

            [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BEM - Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BEM - Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BEM - Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BEM - Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BEM - Anggota / Peserta',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BLM - Ketua',
                'point' => 3,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BLM - Wakil Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BLM - Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BLM - Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'BLM - Anggota / Peserta',
                'point' => 1,
            ],

            [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'HMJ - Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'HMJ - Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'HMJ - Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'HMJ - Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'HMJ - Pengurus Lainya',
                'point' => 1,
            ],


            [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'UKM - Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'UKM - Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'UKM - Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'UKM - Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'UKM - Pengurus Lainya',
                'point' => 1,
            ],

            [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Asrama - Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Asrama - Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Asrama - Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Asrama - Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 5,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Asrama - Pengurus Lainya',
                'point' => 1,
            ],

            [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'SC',
                'point' => 3,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Ketua',
                'point' => 3,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Sekretaris',
                'point' => 2,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Bendhara',
                'point' => 2,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 2,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],


            [
                'letter_type_id' => 6,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'SC',
                'point' => 3,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Ketua',
                'point' => 3,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],

            [
                'letter_type_id' => 6,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'SC',
                'point' => 2,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],


            [
                'letter_type_id' => 6,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'SC',
                'point' => 1.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Ketua',
                'point' => 1.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],

            [
                'letter_type_id' => 6,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'SC',
                'point' => 1.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Ketua',
                'point' => 1.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ],

            [
                'letter_type_id' => 6,
                'activity_level' => 'DESA / KELURAHAN',
                'sub_activity_level' => 'SC',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'DESA / KELURAHAN',
                'sub_activity_level' => 'Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'DESA / KELURAHAN',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 0.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'DESA / KELURAHAN',
                'sub_activity_level' => 'Sekretaris',
                'point' => 0.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'DESA / KELURAHAN',
                'sub_activity_level' => 'Bendhara',
                'point' => 0.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'DESA / KELURAHAN',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 0.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'DESA / KELURAHAN',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 0.5,
            ],
            [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'SC',
                'point' => 1.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Ketua',
                'point' => 1.5,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 6,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 0.5,
            ],


            [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Juara I',
                'point' => 5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Juara II',
                'point' => 4,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Juara III',
                'point' => 3,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Harapan I,II,III',
                'point' => 2,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Sepuluh Besar',
                'point' => 2,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Peserta/Partisipasi',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Supporter Resmi',
                'point' => 1,
            ],


            [
                'letter_type_id' => 7,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Juara I',
                'point' => 4,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Juara II',
                'point' => 3,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Juara III',
                'point' => 2,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Harapan I,II,III',
                'point' => 2,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Sepuluh Besar',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Peserta/Partisipasi',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Supporter Resmi',
                'point' => 0.5,
            ],

            [
                'letter_type_id' => 7,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Juara I',
                'point' => 3,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Juara II',
                'point' => 2,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Juara III',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Harapan I,II,III',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'REGIONAL/PROPINSI',
                'sub_activity_level' => 'Sepuluh Besar',
                'point' => 1,
            ],

            [
                'letter_type_id' => 7,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Juara I',
                'point' => 2,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Juara II',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Juara III',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Harapan I,II,III',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KABUPATEN/KOTA',
                'sub_activity_level' => 'Sepuluh Besar',
                'point' => 1,
            ],

            [
                'letter_type_id' => 7,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Juara I',
                'point' => 1,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Juara II',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Juara III',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Harapan I,II,III',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'KECAMATAN',
                'sub_activity_level' => 'Sepuluh Besar',
                'point' => 0.5,
            ],

            [
                'letter_type_id' => 7,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Juara I',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Juara II',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Juara III',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Harapan I,II,III',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'DESA/KELURAHAN',
                'sub_activity_level' => 'Sepuluh Besar',
                'point' => 0.5,
            ],

            [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Juara I',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Juara II',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Juara III',
                'point' => 0.5,
            ], [
                'letter_type_id' => 7,
                'activity_level' => 'INTERNAL KAMPUS',
                'sub_activity_level' => 'Harapan I,II,III',
                'point' => 0.5,
            ],


            [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'SC',
                'point' => 4,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Ketua',
                'point' => 4,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 3,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Sekretaris',
                'point' => 2,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Bendhara',
                'point' => 2,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1.5,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Penyaji / Narasumber',
                'point' => 4,
            ],

            [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'SC',
                'point' => 3,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Ketua',
                'point' => 3,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 2,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Penyaji / Narasumber',
                'point' => 3,
            ],


            [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'SC',
                'point' => 1.5,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'Wakil Ketua',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'Sekretaris',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'Bendhara',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'Ketua Bidang',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'Anggota / Peserta',
                'point' => 1,
            ], [
                'letter_type_id' => 8,
                'activity_level' => 'LOKAL',
                'sub_activity_level' => 'Penyaji / Narasumber',
                'point' => 2,
            ],


            [
                'letter_type_id' => 9,
                'activity_level' => 'INTERNASIONAL',
                'point' => 4,
            ], [
                'letter_type_id' => 9,
                'activity_level' => 'NASIONAL',
                'point' => 3,
            ], [
                'letter_type_id' => 9,
                'activity_level' => 'REGIONAL',
                'point' => 2,
            ], [
                'letter_type_id' => 9,
                'activity_level' => 'LOKAL',
                'point' => 1,
            ],


            [
                'letter_type_id' => 10,
                'activity_level' => 'INTERNASIONAL',
                'point' => 4,
            ], [
                'letter_type_id' => 10,
                'activity_level' => 'NASIONAL',
                'point' => 5,
            ],

            [
                'letter_type_id' => 11,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Ketua Tim',
                'point' => 2,
            ], [
                'letter_type_id' => 11,
                'activity_level' => 'INTERNASIONAL',
                'sub_activity_level' => 'Pemain',
                'point' => 1,
            ],
            [
                'letter_type_id' => 11,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Ketua Tim',
                'point' => 2,
            ], [
                'letter_type_id' => 11,
                'activity_level' => 'NASIONAL',
                'sub_activity_level' => 'Pemain',
                'point' => 1,
            ],

            [
                'letter_type_id' => 11,
                'activity_level' => 'REGIONAL / PROPINSI',
                'sub_activity_level' => 'Ketua Tim',
                'point' => 1,
            ], [
                'letter_type_id' => 11,
                'activity_level' => 'REGIONAL / PROPINSI',
                'sub_activity_level' => 'Pemain',
                'point' => 1,
            ],

            [
                'letter_type_id' => 11,
                'activity_level' => 'KABUPATEN / KOTA',
                'sub_activity_level' => 'Ketua Tim',
                'point' => 1,
            ], [
                'letter_type_id' => 11,
                'activity_level' => 'KABUPATEN / KOTA',
                'sub_activity_level' => 'Pemain',
                'point' => 1,
            ],

            [
                'letter_type_id' => 11,
                'activity_level' => 'INTERNAL POLTEKES',
                'sub_activity_level' => 'Ketua Tim',
                'point' => 1,
            ], [
                'letter_type_id' => 11,
                'activity_level' => 'INTERNAL POLTEKES',
                'sub_activity_level' => 'Pemain',
                'point' => 0.5,
            ],

            [
                'letter_type_id' => 12,
                'activity_level' => 'STUDI EKSUKRSI / STUDI LAPANGAN',
                'sub_activity_level' => 'Panitia',
                'point' => 1,
            ], [
                'letter_type_id' => 12,
                'activity_level' => 'STUDI EKSUKRSI / STUDI LAPANGAN',
                'sub_activity_level' => 'Peserta',
                'point' => 0.5,
            ],

            [
                'letter_type_id' => 13,
                'activity_level' => 'KEGIATAN INSIDENTIL',
                'point' => 0.5,
            ],
        ];

        foreach ($kegiatan as $data) {
            DetailLetterType::create($data);
        }
    }
}
