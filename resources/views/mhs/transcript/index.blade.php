@extends('layouts.dasboard')
@section('title', 'Transcript SKKM - Poltekes Yogyakarta')
@section('content')
    <div class="px-4 pt-6">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">


            <div class="w-full mb-5">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="{{ route('mhs.dashboard') }}"
                                    class="inline-flex items-center text-gray-700 hover:text-teal-600  ">

                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 text-gray-400 md:ml-2 " aria-current="page">Transcript SKKM</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Transcript SKKM</h1>
                    <p class="text-gray-500 ">Silahkan transcript SKKM yang sudah divalidasi oleh dosen. </p>
                </div>
                <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <form class="flex gap-2 sm:pr-3 " action="{{ route('mhs.skkm.transcript.search') }}" method="GET">
                            <label for="products-search" class="sr-only">Search</label>
                            <div class="relative w-48  sm:w-64 xl:w-96">
                                <input type="text" name="query" id="products-search" value="{{ request('query') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-teal-500 dark:focus:border-teal-500"
                                    placeholder="Cari SKKM">
                            </div>
                            <button
                                class="px-5 text-sm font-medium text-white rounded-lg bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 dark:bg-teal-300  focus:outline-none dark:focus:ring-teal-500"
                                type="submit">
                                Cari
                            </button>
                        </form>

                    </div>
                    <div class="items-center sm:flex">

                        <a href="{{ route('pdf.download') }}" target="_blank"
                            class="text-white bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-teal-300  dark:focus:ring-teal-500"
                            type="button">Transcript SKKM </a>

                        {{-- <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Download
                                        Transcript PDF</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Download
                                        Transcript Word</a>
                                </li>

                            </ul>
                        </div> --}}


                    </div>

                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-s-lg">
                                Nama Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor SKKM
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Angka Kredit
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $document)
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">{{ $document->name }}</td>
                                <td class="px-6 py-4">{{ $document->detailLetterType->letterType->activity_name }}
                                    {{ $document->detailLetterType->activity_level }}
                                    {{ $document->detailLetterType->sub_activity_level }}</td>
                                <td class="px-6 py-4">{{ $document->no }}</td>
                                <td class="px-6 py-4">{{ $document->detailLetterType->point }}</td>


                            </tr>
                        @endforeach

                        <tr class="bg-white border border-t-2 border-gray-200 rounded-lg dark:bg-gray-800">
                            <td class="px-6 py-4">Total Point SKKM : </td>
                            <td></td>
                            <td></td>
                            <td class="px-6 py-4">
                                {{ $point }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="relative overflow-x-auto">
                </div>
            </div>
            <div
                class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center mb-4 sm:mb-0">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Showing <span class="font-semibold text-gray-900 ">{{ $documents->firstItem() }}</span>
                        to <span class="font-semibold text-gray-900 ">{{ $documents->lastItem() }}</span>
                        of <span class="font-semibold text-gray-900 ">{{ $documents->total() }}</span>
                    </span>
                </div>
                <div class="flex items-center space-x-3">
                    @if ($documents->previousPageUrl())
                        <a href="{{ $documents->previousPageUrl() }}" class="flex items-center justify-between">
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Previous
                        </a>
                    @endif

                    @if ($documents->nextPageUrl())
                        <a href="{{ $documents->nextPageUrl() }}" class="flex items-center justify-between">
                            Next
                            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
@endsection
