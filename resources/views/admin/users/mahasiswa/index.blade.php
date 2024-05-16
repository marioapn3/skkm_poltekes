@extends('layouts.dasboard')

@section('content')
    <div class="px-4 pt-6 rounded-lg">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            {{-- <div class="w-full">
                    <a href="#dashboard"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
                    <a href="#user"><i class="fas fa-user"></i> User</a>
                    <a href="#mahasiswa"><i class="fas fa-user-graduate"></i> Mahasiswa</a>
                    <a href="#dosen"><i class="fas fa-chalkboard-teacher"></i> Dosen</a>
                    <a href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    <a href="#logout"><i class="fas fa-file-alt"></i> Logout</a>
                    <a href="#logout"><i class="fas fa-file-alt"></i> Logout</a>
                    <i class="fa-solid fa-file-export"></i>
                </div> --}}
            <div class="w-full mb-5">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="{{ route('admin.dashboard') }}"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600  ">
                                    Dashboard
                                </a>
                            </li>
                            <li class="inline-flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('admin.dashboard') }}"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600  ">
                                    Users
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
                                    <span class="ml-1 text-gray-400 md:ml-2 " aria-current="page">Mahasiswa</span>
                                </div>
                            </li>

                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Users Mahasiswa</h1>
                    <p class="text-gray-500 ">Manajemen Akun untuk Mahasiswa</p>
                </div>
                <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <form class="flex gap-2 sm:pr-3 " action="{{ route('admin.users.mahasiswa.search') }}"
                            method="GET">
                            <label for="products-search" class="sr-only">Search</label>
                            <div class="relative w-48 sm:w-64 xl:w-96">
                                <input type="text" name="query" id="products-search" value="{{ request('query') }}"
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-sm focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-teal-500 dark:focus:border-teal-500"
                                    placeholder="Cari Akun Mahasiswa">
                            </div>
                            <button
                                class="px-5 text-sm font-medium text-white bg-teal-400 rounded-lg hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 dark:bg-teal-300  focus:outline-none dark:focus:ring-teal-500"
                                type="submit">
                                Cari
                            </button>
                        </form>

                    </div>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="text-white bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-teal-300  focus:outline-none dark:focus:ring-teal-500"
                        type="button">
                        Buat Akun
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
                                    <h3 class="text-lg font-semibold text-gray-900 ">
                                        Buat Akun Mahasiswa
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 "
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
                                <form class="p-4 md:p-5" action="{{ route('admin.users.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                                Mahasiswa</label>
                                            <input type="text" name="name" id="name"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-teal-500 dark:focus:border-teal-500"
                                                placeholder="Nama Mahasiswa" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                                Mahasiswa</label>
                                            <input type="email" name="email" id="email"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-teal-500 dark:focus:border-teal-500"
                                                placeholder="Email Mahasiswa" required="">
                                        </div>

                                        <div class="col-span-2">
                                            <label for="password"
                                                class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                                            <input type="password" name="password" id="password"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-teal-500 dark:focus:border-teal-500"
                                                placeholder="Password" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="password_confirmation"
                                                class="block mb-2 text-sm font-medium text-gray-900 ">Konfirmasi
                                                Password</label>
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-teal-500 dark:focus:border-teal-500"
                                                placeholder="Konfirmasi Password" required="">
                                        </div>
                                        <input type="text" name="role" value="1" hidden>
                                    </div>

                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">

                                        Buat Akun
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
                                Nama Mahasiswa
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Email Mahasiswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NIM
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Prodi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Semester
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link
                            </th> --}}
                            <th scope="col" class="px-6 py-3 rounded-e-lg">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">{{ $user->name }}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
                                <td class="px-6 py-4">{{ $user->student->nim }}</td>
                                <td class="px-6 py-4">{{ $user->student->prodi }}</td>
                                <td class="px-6 py-4">{{ $user->student->semester }}</td>
                                <td class="px-6 py-4 ">
                                    <div class="flex gap-1">
                                        <a href="{{ route('admin.users.mahasiswa.edit', $user->id) }}"
                                            id="validate_button" data-id="{{ $user->id }}"
                                            data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                            class="p-2 text-white bg-green-500 rounded-xl" type="button">
                                            <i class="w-3 h-3 fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <button id="reject_button" data-id="{{ $user->id }}"
                                            data-modal-target="reject-modal" data-modal-toggle="reject-modal"
                                            class="p-2 text-white bg-red-500 rounded-xl" type="button">
                                            <i class="w-3 h-3 fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>


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
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                            class="font-semibold text-gray-900 ">{{ $users->firstItem() }}-{{ $users->lastItem() }}</span>
                        of <span class="font-semibold text-gray-900 ">{{ $users->total() }}</span></span>
                </div>
                <div class="flex items-center space-x-3">
                    @if ($users->previousPageUrl())
                        <a href="{{ $users->previousPageUrl() }}" class="flex items-center justify-between">
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Previous
                        </a>
                    @endif

                    @if ($users->nextPageUrl())
                        <a href="{{ $users->nextPageUrl() }}" class="flex items-center justify-between">
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
    {{-- validate modal --}}
    {{-- <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 "
                    data-modal-hide="popup-modal">
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
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin memvalidasi
                        SKKM ini?
                    </h3>
                    <form action="{{ route('dsn.skkm.validate') }}" method="POST">
                        @method('post')
                        @csrf
                        <input name="id" type="text" id="validate_id" hidden>
                        <button data-modal-hide="popup-modal" type="submit"
                            class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600  dark:hover:bg-gray-700">
                            Tidak</button>
                    </form>


                </div>
            </div>
        </div>
    </div> --}}

    {{-- Reject modal --}}
    <div id="reject-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 "
                    data-modal-hide="reject-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 text-center md:p-5">
                    <svg class="w-12 h-12 mx-auto mb-4 text-red-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus
                        user ini?
                    </h3>
                    <form action="{{ route('admin.users.delete') }}" method="POST">
                        @method('delete')
                        @csrf
                        <input name="id" type="text" id="reject_id" hidden>
                        <button data-modal-hide="reject-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya
                        </button>
                        <button data-modal-hide="reject-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600  dark:hover:bg-gray-700">
                            Tidak</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection

{{-- delete modal --}}



@section('script')
    <script>
        $(document).on('click', '#validate_button', function() {
            let id = $(this).attr('data-id');
            $('#validate_id').val(id);
        });

        $(document).on('click', '#reject_button', function() {
            let id = $(this).attr('data-id');
            $('#reject_id').val(id);
        });
    </script>
@endsection
