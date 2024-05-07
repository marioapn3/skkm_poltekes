<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .rotate-90 {
            writing-mode: vertical-lr;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <p>Form SKKM</p>
    <p>NILAI SEMESTER</p>
    <p>Satuan Kredit Mahasiswa</p>

    <table style="">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>{{ Auth::user()->student->nim }}</td>
        </tr>
        <tr>
            <td>Prodi / Jurusan</td>
            <td>:</td>
            <td>{{ Auth::user()->student->studyProgram->name }}</td>
        </tr>
        <tr>
            <td>Tingkat / Semester</td>
            <td>:</td>
            <td>{{ Auth::user()->student->semester }}</td>
        </tr>
    </table>

    <table style="width: 100%; ">
        <thead style="">
            <tr>
                <th rowspan="3">NO</th>
                <th rowspan="3"> Jenis Kegiatan</th>
                <th colspan="16">Jenis SKKM</th>
            </tr>
            <tr>
                <th colspan="4">Kegiatan Wajib</th>
                <th colspan="12">Kegiatan Pilihan</th>
            </tr>
            <tr>
                @foreach ($lts as $item)
                    <th class="rotate-90" style="height: 200px">{{ $item->activity_name }}</th>
                @endforeach
                <th class="rotate-90">Bukti Fisik</th>
                <th class="rotate-90">Angka Kredit</th>
                <th class="rotate-90">TTD dan atau verifikasi</th>
            </tr>
        </thead>
        <tbody class="">
            @foreach ($documents as $dc)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dc->name }}</td>
                    @foreach ($lts as $lt)
                        <td>
                            @if ($dc->detailLetterType->letterType->id == $lt->id)
                                Bener
                            @endif
                        </td>
                    @endforeach
                    <td>Sertifikat Nomor{{ $dc->no }}</td>
                    <td>{{ $dc->detailLetterType->point }}</td>
                    <td>Centang</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2">Jumlah Angka Kredit : </td>
                <td colspan="14"></td>
                <td colspan="">{{ $point }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
