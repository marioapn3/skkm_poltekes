@extends('layouts.dasboard')
@section('title', 'Update Profile Mahasiswa - Poltekes Yogyakarta')
@section('content')
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#selectpicker').select2();
        });

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
                                <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 ">
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
                                    <span class="ml-1 text-gray-400 md:ml-2 " aria-current="page">
                                        Profile</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Profile</h1>
                    <p class="text-gray-500 ">Silahkan melengkapi data anda </p>
                </div>
            </div>
            {{-- input untuk update nama, email, nim, prodi, semester --}}
            <form action="{{ route('mhs.profile.update') }}" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-4 lg:pr-56 xl:pr-72 md:grid-cols-2">
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                            Lengkap</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan nama anda" value="{{ Auth::user()->name }}" required>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan email anda" value="{{ Auth::user()->email }}" required>
                    </div>
                    <div>
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                            Induk Mahasiswa</label>
                        <input type="text" name="nim" id="nim"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan NIM anda" value="{{ Auth::user()->student->nim }}">
                    </div>
                    <div>
                        <label for="study_program_id" class="block mb-2 text-sm font-medium text-gray-900 ">Program
                            Studi</label>

                        <select id="selectpicker" name="study_program_id"
                            class="selectpicker border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            style="width: 100%" data-placeholder="Pilih Program Studi" data-allow-clear="false"
                            title="Pilih Program Studi">
                            <option value="">Pilih Jenis SKKM</option>
                            @if (Auth::user()->student->study_program_id != null)
                                <option selected value="{{ Auth::user()->student->study_program_id }}">
                                    {{ Auth::user()->student->studyProgram->name }}
                                </option>
                            @else
                                <option selected value="">
                                    Pilih Program Studi
                                </option>
                            @endif
                            @foreach ($study_programs as $programs)
                                <option value="{{ $programs->id }}">{{ $programs->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 ">Semester</label>
                        <input name="semester" type="number" id="number-input" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan semester anda sekarang" required max="15" min="1"
                            value="{{ Auth::user()->student->semester }}" />
                    </div>
                    <div>
                        <label for="lecture_id" class="block mb-2 text-sm font-medium text-gray-900 ">Dosen
                            Pembimbing</label>
                        <select id="lecture" name="lecture_id"
                            class="lecture border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            style="width: 100%" data-placeholder="Pilih Dosen Pembimbing" data-allow-clear="false"
                            title="Pilih Dosen Pembimbing">

                            @if (Auth::user()->student->lecture != null)
                                <option selected value="{{ Auth::user()->student->lecture_id }}">
                                    {{ Auth::user()->student->lecture->user->name }} -
                                    {{ Auth::user()->student->lecture->nip }}
                                </option>
                            @else
                                <option selected value="">Pilih Dosen</option>
                            @endif
                            @foreach ($lectures as $lecture)
                                <option value="{{ $lecture->id }}">{{ $lecture->user->name }} - {{ $lecture->nip }}
                                </option>
                            @endforeach

                        </select>

                    </div>

                    {{-- buatkan button submit nya --}}
                    <div class="col-span-1 mt-2 md:col-span-2">
                        <button type="submit"
                            class="w-full px-5 py-2 text-base font-medium text-center text-white bg-teal-400 rounded-lg hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 sm:w-auto ">Simpan
                            Data</button>
                    </div>
                </div>
            </form>
        </div>

        <div
            class="p-4 mt-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full mb-5">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Update Password</h1>
                    <p class="text-sm text-gray-500 ">Ubah kata sandi anda</p>
                </div>
            </div>
            {{-- input untuk update nama, email, nim, prodi, semester --}}
            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 gap-4 lg:pr-56 xl:pr-72 md:grid-cols-2">
                    <div class="col-span-1 md:col-span-2">
                        <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 ">Password
                            Lama</label>
                        <input type="password" name="current_password" id="current_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan password lama anda" required>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password Baru</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan password baru anda" required>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Konfirmasi
                            Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Konfirmasi password anda" required>
                    </div>
                    {{-- buatkan button submit nya --}}
                    <div class="col-span-1 mt-2 md:col-span-2">
                        <button type="submit"
                            class="w-full px-5 py-2 text-base font-medium text-center text-white bg-teal-400 rounded-lg hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 sm:w-auto ">Simpan
                            Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
@endsection
