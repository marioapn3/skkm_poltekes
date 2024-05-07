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
                            <li class="inline-flex items-center"><a href="{{ route('mhs.skkm.index') }}"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                    <div class="flex items-center">

                                        <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-1 md:ml-2 " aria-current="page">SKKM</span>
                                    </div>
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
                                    <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Edit
                                        Data</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Edit SKKM</h1>
                    <p class="text-gray-500 ">Silahkan edit data SKKM anda</p>
                </div>

            </div>
            <form action="{{ route('mhs.skkm.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4 lg:pr-56 xl:pr-72 md:grid-cols-2">
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Kegiatan</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nama Kegiatan yang dilaksanakan" value="{{ $document->name }}" required>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="detail_letter_type_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis SKKM</label>

                        <select id="selectpicker" name="detail_letter_type_id"
                            class="selectpicker border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            style="width: 100%" data-placeholder="Pilih Jenis SKKM" data-allow-clear="false"
                            title="Pilih Jenis SKKM">
                            {{-- <option value="">Pilih Jenis SKKM</option> --}}
                            <option selected value="{{ $document->detail_letter_type_id }}">

                                {{ $document->detailLetterType->letterType->activity_name }} -
                                {{ $document->detailLetterType->activity_level }}

                            </option>

                            @foreach ($detailLetterTypes as $letter)
                                @if ($letter->sub_activity_level == null)
                                    <option value="{{ $letter->id }}" data-point="{{ $letter->point }}">

                                        {{ $letter->letterType->activity_name }} -
                                        {{ $letter->activity_level }}
                                    </option>
                                @else
                                    <option value="{{ $letter->id }}" data-point="{{ $letter->point }}">

                                        {{ $letter->letterType->activity_name }} -
                                        {{ $letter->activity_level }} -
                                        {{ $letter->sub_activity_level }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="point" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angka
                            Kredit</label>
                        <input type="point" name="point" id="point"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan point anda" required value="{{ $document->detailLetterType->point }}"
                            disabled>
                    </div>
                    <script type="">
                        $(document).ready(function() {
                            $('#selectpicker').select2();
                            $('#selectpicker').on('change', function() {
                                 var selectedOption = $(this).val();
                                 var selectedLetter = {!! json_encode($detailLetterTypes->keyBy('id')->toArray()) !!}[selectedOption];
                                 var creditValue = selectedLetter ? selectedLetter.point : '';
                                 $('#point').val(creditValue);
                                 if(creditValue == ''){
                                    $('#point').val({{ $document->detailLetterType->point }});
                                }
                            });
                        });
                    </script>
                    <div class="col-span-1 md:col-span-2">
                        <label for="no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Nomor SKKM</label>
                        <input type="text" name="no" id="no"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nomor Kegiatan yang dilaksanakan" value="{{ $document->no }}">
                    </div>
                    <div class="col-span-1 md:col-span-2 ">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">Upload
                            file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="file" id="file" type="file" name="file">
                        <p class="mt-2 text-sm text-gray-500">Ini adalah file anda sebelumnya
                            <a class="text-blue-500 underline" href="{{ asset($document->file) }}"
                                target="_blank">Dokumen</a> Kosongkan
                            file jika
                            tidak ingin
                            mengganti file.
                        </p>
                    </div> <input type="text" value="{{ $document->id }}" name="document_id" hidden>
                    <div class="col-span-1 mt-2 md:col-span-2">
                        <button type="submit"
                            class="w-full px-5 py-2 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan
                            Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

@endsection
@section('script')
    <script>
        $(document).on('click', '#deleteButton', function() {
            let id = $(this).attr('data-id');
            $('#delete_id').val(id);
        });
    </script>
@endsection
