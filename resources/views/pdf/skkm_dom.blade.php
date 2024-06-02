<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container-footer table {
            border-collapse: collapse;
            width: 100%;
            padding: 10px;
            margin-top: 150px
        }

        .mt-atas {
            height: 50px;
        }

        .tanda-tangan {
            height: 120px;
        }

        .footer-kiri {
            width: 400px;

        }

        .footer-kanan {
            width: 400px
        }

        .container-footer th,
        .container-footer td {
            /* border: 1px solid black; */
            text-align: center;
            vertical-align: middle;
        }

        .container table {
            border-collapse: collapse;
            width: 100%;
        }

        .container th,
        .container td {
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
        }



        body {
            font-size: 11px;
            /* times new roman */
            font-family: 'Times New Roman', Times, serif;
        }

        .container-title {

            text-align: center;
            margin-bottom: 20px;
        }

        .container-title p {
            /* font-size: 20px; */
            font-weight: bold;
            /* give underline */
        }

        .table-profile {
            margin-bottom: 20px;
            margin-left: 20px
        }

        .container-bottom {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            /* Jarak antara kolom */
            margin-top: 50px;
        }

        .container-bottom div {
            display: flex;
            flex-direction: column;
        }

        .container-bottom p {
            margin: 0;
        }

        .container-bottom p.signature {
            border-bottom: 1px solid black;
            width: 80%;
            /* Lebar tanda tangan */
            margin-top: 20px;
        }

        .container-bottom p.date {
            margin-top: 40px;
        }

        .container-bottom p.signature::after {
            content: ".............................................";
        }

        .container-bottom p.signature span {
            margin-left: 150px;
            /* Jarak antara nama dan tanda tangan */
        }
    </style>
</head>

<body>
    <div class="container-title">
        <p style="text-decoration: underline;">Form SKKM</p>
        <p>NILAI SEMESTER</p>
        <p>Satuan Kredit Mahasiswa</p>

    </div>

    <table class="table-profile">

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
    <div class="container">
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
                        <th class="rotate" style="height: 200px">{{ $item->activity_name }}</th>
                    @endforeach
                    <th class="rotate">Bukti Fisik</th>
                    <th class="rotate">Angka Kredit</th>
                    <th class="rotate">TTD dan atau verifikasi</th>
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
                                    V
                                @endif
                            </td>
                        @endforeach
                        <td>Sertifikat Nomor {{ $dc->no }}</td>
                        <td>{{ $dc->detailLetterType->point }}</td>
                        <td>V</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2">Jumlah Angka Kredit : </td>
                    <td colspan="14"></td>
                    <td colspan="">{{ $point }}</td>
                    <td> V</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container-footer">
        <table>
            <tbody>
                <tr class="mt-atas">
                    <td></td>
                </tr>
                <tr>
                    <td class="footer-kiri">
                        <br>
                        Mengetahui / Menyetujui
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="footer-kanan">Yogyakarta, @php
                        $date = date('d F Y');
                        echo $date;
                    @endphp
                        <br>Dosen Pembimbing Akademik
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="">
                    <td>
                        <img src="{{ public_path(Auth::user()->student->studyProgram->headStudy->signature_picture) }}"
                            alt="" width="100">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img src="{{ public_path(Auth::user()->student->lecture->signature_picture) }}" alt=""
                            width="100"></td>
                </tr>

                <tr>
                    <td>
                        {{ Auth::user()->student->studyProgram->headStudy->user->name }}
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ Auth::user()->student->lecture->user->name }}</td>
                </tr>
                <tr>
                    <td>NIP : {{ Auth::user()->student->studyProgram->headStudy->nip }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>NIP : {{ Auth::user()->student->lecture->nip }}</td>
                </tr>
            </tbody>

        </table>
    </div>

    {{-- <div class="container"> --}}
    {{-- Buatkan Grid 2 kali 2 --}}
    {{-- @foreach ($lts as $lt)
            <img src="{{ asset($lt->file) }}" alt="">
        @endforeach --}}
    {{-- @dd($documents) --}}
    {{-- @foreach ($documents as $dcm)
            <img src="{{ asset($dcm->file) }}" alt="">
        @endforeach --}}
    {{-- </div> --}}

</body>

</html>
