@extends('layouts.dasboard')
@section('title', 'Ubah Profile Dosen - Poltekes Yogyakarta')
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
                                    <a href="{{ route('admin.users.dosen.index') }}"
                                        class="inline-flex items-center text-gray-700 hover:text-primary-600 ">
                                        Dosen
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
            <form action="{{ route('admin.users.dosen.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4 lg:pr-56 xl:pr-72 md:grid-cols-2">
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                            Lengkap</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan nama anda" value="{{ $user->name }}" required>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan email anda" value="{{ $user->email }}" required>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                            Induk Pegawai</label>
                        <input type="text" name="nip" id="nip"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan NIP anda" value="{{ $user->lecture->nip }}">
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                            Gambar Tanda Tangan</label>
                        <input type="file" onchange="loadFile(event)"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" name="signature_picture" accept=".jpg">

                        <img id='preview_img' class="object-cover w-auto h-40 mt-4 border border-gray-300 bg-gray-50 "
                            src="{{ asset($user->lecture->signature_picture) }}" alt="Current profile photo" />


                    </div>



                    <script>
                        var loadFile = function(event) {

                            var input = event.target;
                            var file = input.files[0];
                            var type = file.type;

                            var output = document.getElementById('preview_img');


                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function() {
                                URL.revokeObjectURL(output.src) // free memory
                            }
                        };
                    </script>

                    {{-- buatkan button submit nya --}}
                    <div class="col-span-1 mt-2 md:col-span-2">
                        <button type="submit"
                            class="w-full px-5 py-2 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan
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
            <form method="post" action="{{ route('admin.users.updatePassword', $user->id) }}">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 gap-4 lg:pr-56 xl:pr-72 md:grid-cols-2">

                    <div class="col-span-1 md:col-span-2">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password
                            Baru</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan password baru anda" required>
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 ">Konfirmasi
                            Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Konfirmasi password anda" required>
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
