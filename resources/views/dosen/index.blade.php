@extends('layouts.dasboard')
@section('title', 'Dashboard Dosen - Poltekes Yogyakarta')
@section('content')
    <div class="px-4 pt-6">
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
        {{-- <div class="gap-4 mt-4 grid-c md:grid-cols-2 "> --}}
        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-4">
            <a href="#"
                class="flex flex-col p-6 transition-all duration-500 bg-white border border-indigo-100 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
                <div
                    class="flex items-center justify-center bg-teal-400 border border-teal-500 rounded-full shadow-inner w-14 h-14 ">
                    <i class="text-2xl text-white fa-solid fa-user-group"></i>
                </div>
                <div class="flex-1 text-end">
                    <p class="text-gray-600 text-md ">Jumlah Mahasiswa</p>

                    <h5 class="text-xl font-bold lg:text-2xl">{{ $allStudents }}</h5>

                </div>
            </a>
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
        </div>


    </div>
@endsection
