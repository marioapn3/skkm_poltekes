@extends('layouts.dasboard')
@section('title', 'SKKM - Poltekes Yogyakarta')
@section('content')
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#selectpicker').select2();
        });
    </script>

    <div class="px-4 pt-6 rounded-lg">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">

            <div class="w-full mb-5">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="{{ route('mhs.dashboard') }}"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">

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
                                    <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Rekap
                                        SKKM</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Rekap SKKM</h1>
                    <p class="text-gray-500 ">Rekap Dokumen SKKM anda disini. SKKM merupakan Satuan Kredit Kegiatan
                        Mahasiswa. </p>
                </div>
                <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <form class="flex gap-2 sm:pr-3 " action="{{ route('mhs.skkm.search') }}" method="GET">
                            <label for="products-search" class="sr-only">Search</label>
                            <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                                <input type="text" name="query" id="products-search" value="{{ request('query') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Cari SKKM">
                            </div>
                            <button
                                class="px-5 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                                type="submit">
                                Cari
                            </button>
                        </form>

                    </div>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        type="button">
                        Tambah SKKM
                    </button>
                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-lg max-h-full p-4">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Input SKKM
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" action="{{ route('mhs.skkm.upload') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div class="col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Kegiatan</label>
                                            <input type="text" name="name" id="name"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nama kegiatan yang dilaksanakan" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="category"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                                SKKM</label>

                                            <select id="selectpicker" name="detail_letter_type_id"
                                                class="selectpicker border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                style="width: 100%" data-placeholder="Pilih Jenis SKKM"
                                                data-allow-clear="false" title="Pilih Jenis SKKM">
                                                <option value="">Pilih Jenis SKKM</option>
                                                @foreach ($detailLetterTypes as $letter)
                                                    @if ($letter->sub_activity_level == null)
                                                        <option value="{{ $letter->id }}"
                                                            data-point="{{ $letter->point }}">
                                                            {{ $letter->letterType->type }}
                                                            {{ $letter->letterType->activity_name }} -
                                                            {{ $letter->activity_level }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $letter->id }}"
                                                            data-point="{{ $letter->point }}">
                                                            {{ $letter->letterType->type }}
                                                            {{ $letter->letterType->activity_name }} -
                                                            {{ $letter->activity_level }} -
                                                            {{ $letter->sub_activity_level }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="point"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angka
                                                Kredit</label>
                                            <input type="text" name="point" id="point" disabled
                                                class="border bg-gray-100 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="0.5" required="">
                                        </div>

                                        <script type="">
                                            $(document).ready(function() {
                                                // Inisialisasi Select2
                                                $('#selectpicker').select2();

                                                $('#selectpicker').on('change', function() {
                                                    var selectedOption = $(this).val();

                                                    var selectedLetter = {!! json_encode($detailLetterTypes->keyBy('id')->toArray()) !!}[selectedOption];
                                                    var creditValue = selectedLetter ? selectedLetter.point :
                                                        ''; // Mengambil nilai point jika tersedia

                                                    $('#point').val(creditValue);
                                                });
                                            });
                                        </script>

                                        <div class="col-span-2">
                                            <label for="no"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                                SKKM</label>
                                            <input type="text" name="no" id="no"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nomor kegiatan yang dilaksanakan" required="">
                                        </div>

                                        <div class="col-span-2 ">

                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="file">Upload file</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="file" id="file" type="file" name="file">

                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                        Tambah SKKM
                                    </button>
                                </form>
                            </div>
                        </div>
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
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-e-lg">
                                Opsi
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
                                <td class="px-6 py-4">
                                    @if ($document->status == 'Menunggu')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300 border border-yellow-300">Menunggu
                                        </span>
                                    @elseif($document->status == 'Validasi')
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300 border border-green-300">Validasi</span>
                                    @else
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300 border border-red-300">Ditolak</span>
                                    @endif
                                </td>
                                <td class="flex gap-1 px-6 py-4">
                                    <a href="{{ route('mhs.skkm.edit', $document) }}">
                                        <button class="p-2 text-white bg-green-500 rounded-xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>
                                    </a>
                                    <button id="deleteButton" data-id="{{ $document->id }}"
                                        data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                                        class="p-2 text-white bg-red-500 rounded-xl" type="button">
                                        <svg class="w-4 h-4" stroke="currentColor" viewBox="0 0 16 16"
                                            xmlns="http://www.w3.org/2000/svg" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 3h3v1h-1v9l-1 1H4l-1-1V4H2V3h3V2a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v1zM9 2H6v1h3V2zM4 13h7V4H4v9zm2-8H5v7h1V5zm1 0h1v7H7V5zm2 0h1v7H9V5z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="relative overflow-x-auto">
                </div>
            </div>
            <div
                class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center mb-4 sm:mb-0">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Showing <span
                            class="font-semibold text-gray-900 dark:text-white">{{ $documents->firstItem() }}</span>
                        to <span class="font-semibold text-gray-900 dark:text-white">{{ $documents->lastItem() }}</span>
                        of <span class="font-semibold text-gray-900 dark:text-white">{{ $documents->total() }}</span>
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
    {{-- Delete Modal --}}
    <div id="delete-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="delete-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 text-center md:p-5">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus
                        SKKM ini?
                    </h3>
                    <form action="{{ route('mhs.skkm.delete') }}" method="POST">
                        @method('delete')
                        @csrf
                        <input name="id" type="text" id="delete_id" hidden>
                        <button data-modal-hide="delete-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="delete-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Tidak</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).on('click', '#deleteButton', function() {
            let id = $(this).attr('data-id');
            $('#delete_id').val(id);
        });
    </script>
@endsection
