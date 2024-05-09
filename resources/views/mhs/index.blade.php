@extends('layouts.dasboard')
@section('title', 'SIREKAM - Poltekes Yogyakarta')
@section('content')

    <div class="px-4 pt-6">
        @if (Auth::user()->student->lecture_id == null ||
                Auth::user()->student->study_program_id == null ||
                Auth::user()->student->semester == null ||
                Auth::user()->student->nim == null)
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Perhatian Penting! </span>Dimohon untuk melengkapi data diri anda terlebih
                    dahulu
                    melalui
                    link <a href="{{ route('mhs.profile') }}" class="text-red-800 underline dark:text-red-400">Profile</a>
                </div>
            </div>
        @endif

        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full mb-5">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <span class="inline-flex items-center text-gray-400 ">
                                    Dashboard
                                </span>
                            </li>


                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Selamat Datang di Aplikasi
                        Sirekam 👋</h1>
                    <p class="text-gray-500 ">Sistem kami siap membantu anda dalam mengelola Satuan Kredit Kegiatan
                        Mahasiswa </p>
                </div>

            </div>

        </div>
        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-4">
            <div
                class="flex items-center justify-between gap-5 p-4 bg-white border border-gray-200 rounded-lg shadow-sm lg:gap-0 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-5 my-4 text-5xl text-lime-400">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                </div>
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Semua Dokumen</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{ $all }}</span>

                </div>
            </div>
            <div
                class="flex items-center justify-between gap-5 p-4 bg-white border border-gray-200 rounded-lg shadow-sm lg:gap-0 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-5 my-4 text-5xl text-green-500">
                    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                </div>
                <div class="w-full ">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Dokumen Tervalidasi</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{ $valid }}</span>

                </div>
            </div>
            <div
                class="flex items-center justify-between gap-5 p-4 bg-white border border-gray-200 rounded-lg shadow-sm lg:gap-0 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-5 my-4 text-5xl text-yellow-200">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </div>
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Menunggu Validasi</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{ $pending }}</span>

                </div>
            </div>
            <div
                class="flex items-center justify-between gap-5 p-4 bg-white border border-gray-200 rounded-lg shadow-sm lg:gap-0 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-5 my-4 text-5xl text-red-500">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                </div>
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Dokumen Ditolak</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{ $reject }}</span>

                </div>
            </div>
        </div>
        <div
            class="p-4 mt-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full mb-5">
                <div class="mb-4">

                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Sistem Penyelenggaraan
                        Kegiatan Kemahasiswaan Program Studio Diploma III dan Diploma IV</h1>
                    <p class="text-gray-500 ">Ketentuan Angka Kredit Bedasarkan Jenis Kegiatan </p>
                </div>
                @foreach ($Ltypes as $ltype)
                    <div class="p-2">
                        <p class="mb-2 text-bold">{{ $loop->iteration }}. {{ $ltype->type }} - {{ $ltype->activity_name }}
                        </p>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 rounded-s-lg">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tingkat Kegiatan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Angka Kredit
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Dasar Penilaian
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ltype->detailLetterType as $dtype)
                                        <tr class="bg-white dark:bg-gray-800">
                                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4">{{ $dtype->activity_level }} -
                                                {{ $dtype->sub_activity_level }}</td>
                                            <td class="px-6 py-4">{{ $dtype->point }}</td>
                                            <td class="px-6 py-4"></td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <div class="relative overflow-x-auto">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>
@endsection
