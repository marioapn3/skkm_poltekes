@extends('layouts.dasboard')
@section('title', 'Tambah Program Studi- Poltekes Yogyakarta')
@section('content')
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lecture').select2();
        });
    </script>
    <div class="px-4 pt-6 rounded-lg">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full mb-5">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="{{ route('admin.dashboard') }}"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 ">
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ route('admin.study-program.index') }}"
                                        class="inline-flex items-center text-gray-700 hover:text-primary-600 ">
                                        Program Studi
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 text-gray-400 md:ml-2 " aria-current="page">Tambah</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Program Studi</h1>
                    <p class="text-gray-500 ">Silahkan melengkapi Nama Program Studi dan Kepala Program Studi </p>
                </div>
            </div>
            {{-- input untuk update nama, email, nim, prodi, semester --}}
            <form action="{{ route('admin.study-program.store') }}" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-4 lg:pr-56 xl:pr-72 md:grid-cols-2">
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                            Program Studi</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan nama program studi" required>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <label for="lecture_id" class="block mb-2 text-sm font-medium text-gray-900 ">Kepala Program
                            Studi</label>
                        <select id="lecture" name="head_of_study"
                            class="lecture border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            style="width: 100%" data-placeholder="Pilih Dosen Pembimbing" data-allow-clear="false"
                            title="Pilih Dosen Pembimbing">
                            @foreach ($lectures as $lecture)
                                <option value="{{ $lecture->id }}">{{ $lecture->user->name }} - {{ $lecture->nip }}
                                </option>
                            @endforeach

                        </select>

                    </div>
                    {{-- buatkan button submit nya --}}
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
