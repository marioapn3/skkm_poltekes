@extends('layouts.dasboard')
@section('title', 'Dashboard Mahasiswa')
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
        {{-- <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-4">
            <div
                class="flex items-center justify-between gap-5 p-4 bg-white border border-gray-200 rounded-lg shadow-sm lg:gap-0 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-5 my-4 text-5xl ">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Mahasiswa</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl ">{{ $allStudents }}</span>
                </div>
            </div>
            <div
                class="flex items-center justify-between gap-5 p-4 bg-white border border-gray-200 rounded-lg shadow-sm lg:gap-0 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-5 my-4 text-5xl text-lime-500">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                </div>
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Semua Dokumen</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl ">{{ $all }}</span>

                </div>
            </div>
            <div
                class="flex items-center justify-between gap-5 p-4 bg-white border border-gray-200 rounded-lg shadow-sm lg:gap-0 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-5 my-4 text-5xl text-green-500">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                </div>
                <div class="w-full ">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Dokumen Tervalidasi</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl ">{{ $valid }}</span>

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
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl ">{{ $pending }}</span>

                </div>
            </div>

        </div> --}}


    </div>
@endsection
