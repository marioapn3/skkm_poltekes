<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/logo_kemenkes_favicon.png') }}">
    <title>SIREKAM - Kemenkes Poltekes Yogyakarta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Meta SEO -->
    {{-- <meta name="title" content="Landwind - Tailwind CSS Landing Page">
    <meta name="description"
        content="Get started with a free and open-source landing page built with Tailwind CSS and the Flowbite component library.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Themesberg"> --}}

    <!-- Social media share -->
    {{-- <meta property="og:title" content=Landwind - Tailwind CSS Landing Page>
    <meta property="og:site_name" content=Themesberg>
    <meta property="og:url" content=https://https://demo.themesberg.com/landwind />
    <meta property="og:description" content=Get started with a free and open-source landing page for Tailwind CSS built
        with the Flowbite component library featuring dark mode, hero sections, pricing cards, and more.>
    <meta property="og:type" content="">
    <meta property="og:image" content=https://themesberg.s3.us-east-2.amazonaws.com/public/github/landwind/og-image.png>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@themesberg" />
    <meta name="twitter:creator" content="@themesberg" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="./output.css" rel="stylesheet">
    <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
</head>

<body class="font-quicksand">
    <header class="fixed z-50 w-full">
        <nav class="bg-white border-gray-200 py-2.5  ">
            <div
                class="flex flex-wrap items-center justify-between px-5 sm:px-10 md:px-15  lg:max-w-screen-xl    mx-auto">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('assets/logo_kemenkes.png') }}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                    {{-- <span class="self-center text-xl font-semibold whitespace-nowrap ">SIREKAM</span> --}}
                </a>
                <div class="flex items-center lg:order-2">
                    {{-- Jika suidah login maka buttonya button dashvboard --}}
                    @if (auth()->check())
                        @php
                            $user = auth()->user();
                            $dashboardRoute = $user->role == 1 ? 'mhs.dashboard' : 'dsn.dashboard';
                        @endphp
                        <a href="{{ route($dashboardRoute) }}"
                            class="text-white bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-teal-500 dark:hover:bg-teal-400 focus:outline-none dark:focus:ring-teal-600">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Masuk</a>
                        <a href="{{ route('register') }}"
                            class="text-white bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-teal-500 dark:hover:bg-teal-400 focus:outline-none dark:focus:ring-teal-600">Daftar</a>
                    @endif


                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#home"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-teal-400 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                        </li>
                        <li>
                            <a href="#fitur"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-teal-400 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Fitur</a>
                        </li>

                        </li>
                        <li>
                            <a href="#faq"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-teal-400 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                        </li>

                        <li>
                            <a href="#contact"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-teal-400 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <!-- Start block -->
    <section class="bg-white b" id="home">
        <div
            class="grid items-center justify-between max-w-screen-xl  px-5 sm:px-10 md:px-15 pt-20 pb-8 mx-auto md:mb-10 lg:gap-8 xl:gap-2 lg:py-16 lg:grid-cols-12 lg:pt-36">
            <div class="mr-auto place-self-center lg:col-span-7">
                {{-- <h1 data-aos="fade-right" data-aos-duration="800" data-aos-delay="200"
                    class="max-w-2xl mb-4 text-3xl  leading-none tracking-tight md:text-4xl xl:text-5xl  drop-shadow-2xl shadow-teal-400  font-extrabold   ">
                    SIREKAM <br>
                </h1> --}}
                <h1 data-aos="fade-right" data-aos-duration="800" data-aos-delay="200"
                    class="max-w-2xl md:mt-10 mb-4 text-3xl  leading-none tracking-wider md:text-4xl xl:text-5xl  font-extrabold text-teal-400 ">
                    SIREKAM</h1>
                <h1 data-aos="fade-right" data-aos-duration="800" data-aos-delay="200"
                    class="max-w-2xl mb-4 text-xl font-bold leading-none tracking-tight md:text-2xl xl:text-3xl  ">
                    Aplikasi Perekapan dan Pengelolaan Dokumen Satuan Kredit Kegiatan Mahasiswa

                </h1>
                <p data-aos="fade-right" data-aos-duration="800" data-aos-delay="200"
                    class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Sirekam dikembangkan untuk mempermudah sistem perekapan dan perhitungan dokumen Satuan Kredit
                    Kegiatan Mahasiswa Poltekes Yogyakarta</p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4 " data-aos="fade-up" data-aos-duration="800"
                    data-aos-delay="200">
                    @php
                        $dashboardRoute = auth()->check()
                            ? ($user->role == 1
                                ? 'mhs.dashboard'
                                : 'dsn.dashboard')
                            : 'login';
                    @endphp

                    <a href="{{ route($dashboardRoute) }}"
                        class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Mulai Sekarang
                    </a>
                    <a href="{{ route($dashboardRoute) }}"
                        class="inline-flex items-center justify-center text-white bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-teal-500 dark:hover:bg-teal-400 focus:outline-none dark:focus:ring-teal-600">
                        Daftar Sekarang
                    </a>

                </div>
            </div>
            <div class="hidden mx-auto ml-auto lg:mt-0 lg:col-span-5 lg:flex" data-aos="fade-left"
                data-aos-duration="800" data-aos-delay="200">
                {{-- <img class=" rounded-xl size-72 md:size-80" src="{{ asset('assets/hero-img-v2.png') }}" --}}
                <img class=" rounded-xl size-72 md:size-80" src="{{ asset('assets/hero-img.png') }}" alt="hero image">
            </div>
        </div>
    </section>
    <!-- End block -->


    <!-- ====== Features Section Start -->
    <section id="fitur" class="max-w-screen-xl py-20 mx-auto overflow-hidden dark:bg-dark">
        <div class="">
            <div class="w-full px-4" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
                <div class="mx-auto mb-12 max-w-[700px] text-center lg:mb-[70px]">
                    <h2 class="text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2] ">
                        Fitur Utama
                    </h2>
                    <p class="text-lg text-body-color dark:text-dark-6 text-gray-500">
                        Cek Fitur Sirekam yang Bikin Pengelolaan SKKM Jadi Lebih Terstruktur!
                    </p>
                </div>
            </div>
            <div class="flex flex-col gap-10">
                <a href="" class="relative lg:relative lg:pl-80 lg:pr-20" data-aos="fade-right"
                    data-aos-duration="1200" data-aos-delay="200">
                    <div class="w-full lg:absolute xl:left-[-25%] lg:top-[3%] lg:left-[-24%] left-0 top-0">
                        <div class="wow fadeInUp group" data-wow-delay=".1s">
                            <div
                                class="mx-auto w-[250px] md:h-[300px] md:w-[300px] flex md:-translate-y-[-1/2] translate-y-1/2 lg:translate-y-0 transform items-center justify-center">
                                <img src="{{ asset('assets/1-skkm.png') }}" alt="fitur"
                                    class=" shadow-lg w-full rounded-[30px] lg:rotate-[-5deg] duration-300 lg:group-hover:rotate-[-10deg] object-cover object-center mx-auto" />


                            </div>
                        </div>
                    </div>
                    <div
                        class="dark:bg-dark lg:rounded-[30px] rounded-[30px] border border-dark-7 dark:border-dark-3 lg:p-20 p-10">
                        <div class="mt-16 md:mt-28 lg:mt-0 lg:text-end text-start">
                            <h2
                                class="mb-3 text-3xl sm:text-4xl md:text-[40px] md:leading-[1.2] font-semibold leading-[1.2] text-primary dark:text-secondary">
                                Rekap SKKM
                            </h2>
                            <p class="text-lg text-body-color dark:text-dark-8 xl:ml-28">

                                Mendukung perekapan dokumen sehingga menjadikan setiap kegiatan
                                mahasiswa lebih terstruktur.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="" class="relative mt-32 lg:relative lg:pr-80 lg:pl-20 lg:mt-0" data-aos="fade-left"
                    data-aos-duration="1200" data-aos-delay="200">
                    <div class="w-full absolute xl:top-[5%] xl:left-[25%] lg:top-[15%] lg:left-[24%] mx-auto">
                        <div class="wow fadeInUp group" data-wow-delay=".1s">
                            <div
                                class="mx-auto w-[250px] md:h-[300px] md:w-[300px] flex -translate-y-1/2 lg:translate-y-0 transform items-center justify-center rounded-full">
                                <img id="modeImage" src="{{ asset('assets/2-skkm.png') }}" alt="fitur"
                                    class=" w-full rounded-[30px] lg:rotate-[5deg] duration-300 lg:group-hover:rotate-[10deg] shadow-lg object-cover object-center mx-auto" />

                            </div>
                        </div>
                    </div>
                    <div
                        class="dark:bg-dark lg:rounded-[30px] rounded-[30px] border border-dark-7 dark:border-dark-3 lg:p-20 p-10">
                        <div class="mt-16 md:mt-28 lg:mt-0">
                            <h2
                                class="mb-3 text-3xl sm:text-4xl md:text-[40px] md:leading-[1.2] font-semibold leading-[1.2] text-primary dark:text-secondary">
                                Transcript SKKM
                            </h2>
                            <p class="text-lg text-body-color dark:text-dark-8 xl:mr-28">
                                Memudahkan mahasiswa untuk melakukan transcript bukti kegiatan mahasiswa
                                yang sudah divalidasi oleh Dosen dan dihitung angka kreditnya.

                            </p>
                        </div>
                    </div>
                </a>
                <a href="" class="relative lg:relative lg:pl-80 lg:pr-20" data-aos="fade-right"
                    data-aos-duration="1200" data-aos-delay="200">>
                    <div class="w-full lg:absolute xl:left-[-25%] lg:top-[3%] lg:left-[-24%] left-0 top-0">
                        <div class="wow fadeInUp group" data-wow-delay=".1s">
                            <div
                                class="mx-auto w-[250px] md:h-[300px] md:w-[300px] flex md:-translate-y-[-1/2] translate-y-1/2 lg:translate-y-0 transform items-center justify-center">
                                <img id="modeImage" src="{{ asset('assets/3-skkm.png') }}" alt="fitur"
                                    class=" w-full rounded-[30px] lg:rotate-[-5deg] duration-300 lg:group-hover:rotate-[-10deg] shadow-lg object-cover object-center mx-auto" />

                            </div>
                        </div>
                    </div>
                    <div
                        class="dark:bg-dark lg:rounded-[30px] rounded-[30px] border border-dark-7 dark:border-dark-3 lg:p-20 p-10">
                        <div class="mt-16 md:mt-28 lg:mt-0 lg:text-end text-start">
                            <h2
                                class="mb-3 text-3xl sm:text-4xl md:text-[40px] md:leading-[1.2] font-semibold leading-[1.2] text-primary dark:text-secondary">
                                Validasi SKKM
                            </h2>
                            <p class="text-lg text-body-color dark:text-dark-8 xl:ml-28">
                                Memudahkan dosen dalam melakukan penilaian dan validasi setiap dokumen yang diajukan
                                oleh mahasiswa.
                            </p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <!-- ====== Features Section End -->



    <!-- Start block -->
    <section id="faq" class="mt-20 bg-white ">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
            <h2 data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200"
                class="mb-6 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2] text-center text-gray-900 lg:mb-8  ">
                Frequently asked questions</h2>

            <div class="max-w-screen-md mx-auto" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                <ul class="flex flex-col gap-5 text-xl">
                    <li class="my-2 bg-white rounded-lg shadow-lg" x-data="accordion(1)">
                        <h2 @click="handleClick()"
                            class="flex flex-row items-center justify-between p-5 font-semibold cursor-pointer">
                            <span>Apa itu SKKM (Satuan Kredit Kegiatan Mahasiswa) ?</span>
                            <svg :class="handleRotate()"
                                class="w-6 h-6 text-teal-400 transition-transform duration-500 transform fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()"
                            class="overflow-hidden transition-all duration-500 border-l-[3px] border-teal-500 max-h-0">
                            <p class="p-5 text-gray-900">
                                SKKM adalah ukuran aktivitas ekstrakurikuler, intrakurikuler, dan lainnya yang dilakukan
                                oleh mahasiswa di perguruan tinggi sebagai bagian dari Tridharma Perguruan Tinggi.
                            </p>
                        </div>
                    </li>
                    <li class="my-2 bg-white shadow-lg" x-data="accordion(2)">
                        <h2 @click="handleClick()"
                            class="flex flex-row items-center justify-between p-5 font-semibold cursor-pointer">
                            <span>Apa yang dimaksud dengan Transcript Form SKKM ?</span>
                            <svg :class="handleRotate()"
                                class="w-6 h-6 text-teal-400 transition-transform duration-500 transform fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="overflow-hidden transition-all duration-500 border-l-[3px] border-teal-500 max-h-0"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-5 text-gray-900">
                                Transcript Form SKKM adalah dokumen resmi yang merekam dan menyajikan seluruh kegiatan
                                dan pencapaian yang telah dilakukan oleh seorang mahasiswa selama masa studinya di
                                perguruan tinggi, dalam bentuk file PDF yang dapat diunduh dan dicetak.
                            </p>
                        </div>
                    </li>
                    <li class="my-2 bg-white shadow-lg" x-data="accordion(3)">
                        <h2 @click="handleClick()"
                            class="flex flex-row items-center justify-between p-5 font-semibold cursor-pointer">
                            <span>Bagaimana proses validasi dokumen ?</span>
                            <svg :class="handleRotate()"
                                class="w-6 h-6 text-teal-400 transition-transform duration-500 transform fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="overflow-hidden transition-all duration-500 border-l-[3px] border-teal-500 max-h-0"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-5 text-gray-900">
                                Proses validasi dokumen SKKM oleh Dosen Pembimbing melibatkan peninjauan dan penilaian
                                dokumen-dokumen yang diajukan oleh mahasiswa sebagai bukti partisipasi mereka. Dosen
                                pembimbing akan memverifikasi keabsahan, relevansi, dan kontribusi nyata dari setiap
                                dokumen terhadap pencapaian SKKM.
                            </p>
                        </div>
                    </li>
                    <li class="my-2 bg-white shadow-lg" x-data="accordion(4)">
                        <h2 @click="handleClick()"
                            class="flex flex-row items-center justify-between p-5 font-semibold cursor-pointer">
                            <span>Apa saja kegiatan yang mendapatkan nilai Angka Kredit SKKM?
                            </span>
                            <svg :class="handleRotate()"
                                class="w-6 h-6 text-teal-400 transition-transform duration-500 transform fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="overflow-hidden transition-all duration-500 border-l-[3px] border-teal-500 max-h-0"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-5 text-gray-900">
                                Kegiatan yang dapat memberikan nilai Angka Kredit meliputi kegiatan di bidang organisasi
                                kepemimpinan, penalaran dan keilmuan, minat dan bakat, kepedulian sosial, serta kegiatan
                                lainnya yang relevan dengan Tridharma Perguruan Tinggi.
                            </p>
                        </div>
                    </li>
                    <li class="my-2 bg-white shadow-lg" x-data="accordion(5)">
                        <h2 @click="handleClick()"
                            class="flex flex-row items-center justify-between p-5 font-semibold cursor-pointer">
                            <span>Bagaimana ketentuan angka kredit SKKM ?</span>
                            <svg :class="handleRotate()"
                                class="w-6 h-6 text-teal-400 transition-transform duration-500 transform fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="overflow-hidden transition-all duration-500 border-l-[3px] border-teal-500 max-h-0"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-5 text-gray-900">
                                Seluruh angka kredit kegiatan mahasiswa yang dihitung berdasarkan ketentuan yang telah
                                ditetapkan oleh Keputusan Direktur Politeknik Kesehatan Kemenkes Yogyakarta Nomor:
                                HK.01.07/1.3/6973/2017
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>
    <!-- End block -->
    <footer id="contact" class="pt-4 bg-teal-400 pt-md-5">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-1 gap-4 gap-5 px-10 py-20 sm:grid-cols-2 md:grid-cols-3 md:px-10 lg:px-0">
                <div class="col-span-1 md:col-span-1">
                    <div class="">
                        {{-- <div class="bg-white rounded-lg"> --}}
                        <img src="{{ asset('assets/logo_kemenkes.png') }}" width="160" class="p-2 bg-white mb-2"
                            alt="">
                        {{-- </div> --}}

                        <div class="">
                            <p class="text-white">Sirekam dikembangkan untuk mempermudah sistem perekapan dan
                                perhitungan SKKM Poltekes Kemenkes Yogyakarta.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-1">
                    <div class="mt-4 md:mt-0">
                        <h5 class="mb-6 font-bold text-white lg:ml-20 ">Menu</h5>
                        <ul class="">
                            <li class="mb-2 lg:ml-20"><a href="#home" class="text-white hover:text-white">Home</a>
                            </li>
                            <li class="mb-2 lg:ml-20"><a href="#fitur" class="text-white hover:text-white">Fitur</a>
                            </li>
                            <li class="mb-2 lg:ml-20"><a href="#faq" class="text-white hover:text-white">FAQ</a>
                            </li>
                            <li class="mb-2 lg:ml-20"><a href="#contact"
                                    class="text-white hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1">
                    <div class="mt-4 md:mt-0">
                        <h5 class="mb-6 font-bold text-white">Contact Us</h5>
                        <ul class="mt-2">
                            <li class="flex items-center text-white">

                                <p> <i class="mr-1 fa fa-map-marker"></i> Jl. Tata Bumi No.3, Banyuraden, Kec. Gamping,
                                    Kabupaten Sleman, Daerah Istimewa
                                    Yogyakarta 55293</p>
                            </li>
                            <li class="flex items-center text-white">

                                <p>
                                    <i class="mr-1 fa fa-envelope"></i>
                                    info@poltekkesjogja.ac.id

                                </p>
                            </li>
                            <li class="flex items-center text-white">

                                <p>
                                    <i class="mr-1 fa fa-phone-square"></i>
                                    (0274) 617601

                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center ">
                <hr>
                <span class="block p-5 text-sm text-center text-white">© 2024 Kemenkes Poltekes Yogyakarta™. All
                    Rights Reserved. Built with Love
                </span>
            </div>
        </div>
    </footer>



    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
</body>

</html>
