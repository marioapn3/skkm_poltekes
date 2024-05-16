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
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Selamat Datang di Aplikasi
                        Sirekam 👋</h1>
                    <p class="text-gray-500 ">Sistem kami siap membantu anda dalam mengelola Satuan Kredit Kegiatan
                        Mahasiswa </p>
                </div>

            </div>

        </div>

        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-4">

            <a href="#"
                class="flex flex-col p-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div
                    class="flex items-center justify-center bg-teal-400 border border-teal-500 rounded-full shadow-inner w-14 h-14 ">
                    <i class="text-2xl text-white fa-solid fa-file"></i>
                </div>
                <div class="flex-1 text-end ">
                    <p class="text-gray-600 text-md ">Semua Dokumen</p>

                    <h5 class="text-xl font-bold lg:text-2xl">{{ $all }}</h5>

                </div>
            </a>
            <a href="#"
                class="flex flex-col p-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div
                    class="flex items-center justify-center bg-teal-400 border border-teal-500 rounded-full shadow-inner w-14 h-14 ">

                    <i class="text-2xl text-white fa-solid fa-check"></i>
                </div>
                <div class="flex-1 text-end">
                    <p class="text-gray-600 text-md ">Dokumen Tervalidasi</p>

                    <h5 class="text-xl font-bold lg:text-2xl">{{ $valid }}</h5>

                </div>
            </a>
            <a href="#"
                class="flex flex-col p-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div
                    class="flex items-center justify-center bg-teal-400 border border-teal-500 rounded-full shadow-inner w-14 h-14 ">
                    <i class="text-2xl text-white fa-solid fa-hourglass-half"></i>
                </div>
                <div class="flex-1 text-end">
                    <p class="text-gray-600 text-md ">Menunggu Validasi</p>

                    <h5 class="text-xl font-bold lg:text-2xl">{{ $pending }}</h5>

                </div>
            </a>
            <a href="#"
                class="flex flex-col p-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div
                    class="flex items-center justify-center bg-teal-400 border border-teal-500 rounded-full shadow-inner w-14 h-14 ">
                    <i class="text-2xl text-white fa-solid fa-user-group"></i>
                </div>
                <div class="flex-1 text-end">
                    <p class="text-gray-600 text-md ">Dokumen Ditolak</p>

                    <h5 class="text-xl font-bold lg:text-2xl">{{ $reject }}</h5>

                </div>
            </a>
        </div>

        {{-- <div
            class="p-4 mt-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full mb-5">
                <div class="mb-4">

                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Sistem Penyelenggaraan
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

        </div> --}}

    </div>
@endsection
