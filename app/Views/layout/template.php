<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Akreditasi - UHO</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer="defer"></script>
    <script src="/assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer="defer"></script>
    <script src="/assets/js/charts-lines.js" defer="defer"></script>
    <script src="/assets/js/charts-pie.js" defer="defer"></script>
    <script src="/assets/js/charts-bars.js" defer="defer"></script>
</head>

<body>
    <div class="spinner-wrapper flex flex-col h-screen justify-center items-center" role="status">
        <img class="" src="<?= base_url('assets/img/logo loader.png'); ?>" alt="loaderlogo">
        <svg aria-hidden="true" class="w-8 h-8 animate-spin fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="gray"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="blue"/>
        </svg>
    </div>
        <script>
            $(window).on('load', function(){
                setTimeout(function() {
            $('.spinner-wrapper').addClass('hidden');
                }, 800);
                });
        </script>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400">
            <img class="" src="<?= base_url('assets/img/logouho.png'); ?>" alt="loaderlogo">
                <ul class="mt-4">
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="home">
                            <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-6 text-left">Dashboard</span>
                        </a>
                    </li>
                    <li id="tataPamong" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.tataPamong }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-6 text-left">Tata Pamong, Tata Kelola & Kerjasama</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/login.html">Akreditasi Eksternal</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="akrinternasional">
                                    Akreditasi Internasional Program Studi
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="auditkeuanganeks">
                                    Audit Eksternal Keuangan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="akrprodi">
                                    Akreditasi Program Studi
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Kerjasama Perguruan Tinggi
                                </a>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li id="mahasiswa" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.mahasiswa }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-6 text-left">Mahasiswa</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="seleksimahasiswabaru">Seleksi Mahasiswa Baru</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="mhsasing">
                                    Mahasiswa Asing
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Pembelajaran Praktikum
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="sumberDayaManusia" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.sumberDayaManusia }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                <span class="ml-6 text-left">Sumber Daya Manusia</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/login.html">Kecukupan Dosen</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Beban Kerja Dosen
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Produktivitas Penelitian & PKM
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Rekognisi Dosen
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="keuanganSaranaPrasarana" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.keuanganSaranaPrasarana }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-6 text-left">Keuangan, Sarana & Prasarana</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Perolehan Dana
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Penggunaan Dana
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="luaranCapaianTridharma" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.luaranCapaianTridharma }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-6 text-left">Luaran & Capaian Tridharma</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">Capaian Pembelajaran</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="prestasimahasiswa">
                                    Prestasi Akademik & Non-akademik Mahasiswa
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Efektivitas & Produktivitas Pendidikan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Daya Saing Lulusan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Kinerja Lulusan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Publikasi Ilmiah
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="sitasiilmiah">
                                    Sitasi Ilmiah
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Produk/jasa yang diadopsi oleh industri/masyarakat
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Luaran Lainnya
                                </a>
                            </li>
                            <!-- <li
                                        class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                        <a class="w-full" href="/data/login">
                                            Halaman Login
                                        </a>
                                    </li> -->
                        </ul>
                    </li>
                    <li id="programStudi" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.programStudi }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-6 text-left">Program Studi</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="formAps1">LKPS</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    LED
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="riwayatakreditasiprodi">
                                    Riwayat Akreditasi
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <script>
                    // Objek yang menyimpan status untuk setiap tombol dropdown
                    var dropdownStatus = {
                        capaianTridharma: false,
                        akreditasiKerjasama: false,
                        dataLuaran: false
                    };

                    // Fungsi untuk mengatur status dan toggle submenu sesuai id tombol dropdown
                    // yang diklik
                    function togglePagesMenu(id) {
                        dropdownStatus[id] = !dropdownStatus[id];
                    }

                    // Inisialisasi Alpine.js
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('dropdownStatus', () => ({
                            ...dropdownStatus
                        }));
                    });
                </script>

                <!-- <div class="px-6 my-6">
                        <button
                            class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Create account
                            <span class="ml-2" aria-hidden="true">+</span>
                        </button>
                    </div> -->
            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Sistem Akreditasi - UHO
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="#">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    <li id="tataPamong" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.tataPamong }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-4">Tata Pamong, Tata Kelola & Kerjasama</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/login.html">Akreditasi Eksternal</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Akreditasi Internasional Program Studi
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Audit Eksternal Keuangan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Akreditasi Program Studi
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Kerjasama Perguruan Tinggi
                                </a>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li id="mahasiswa" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.mahasiswa }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-4">Mahasiswa</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="selesksimahasiswabaru">Seleksi Mahasiswa Baru</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Mahasiswa Asing
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Pembelajaran Praktikum
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="sumberDayaManusia" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.sumberDayaManusia }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                <span class="ml-4">Sumber Daya Manusia</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/login.html">Kecukupan Dosen</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Beban Kerja Dosen
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Produktivitas Penelitian & PKM
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Rekognisi Dosen
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="keuanganSaranaPrasarana" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.keuanganSaranaPrasarana }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-4">Keuangan, Sarana & Prasarana</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Perolehan Dana
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Penggunaan Dana
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="luaranCapaianTridharma" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.luaranCapaianTridharma }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-4">Luaran & Capaian Tridharma</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">Capaian Pembelajaran</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Prestasi Akademik & Non-akademik Mahasiswa
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Efektivitas & Produktivitas Pendidikan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Daya Saing Lulusan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Kinerja Lulusan
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Publikasi Ilmiah
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Sitasi Ilmiah
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Produk/jasa yang diadopsi oleh industri/masyarakat
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">
                                    Luaran Lainnya
                                </a>
                            </li>
                            <!-- <li
                                        class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                        <a class="w-full" href="/data/login">
                                            Halaman Login
                                        </a>
                                    </li> -->
                        </ul>
                    </li>
                    <li id="programStudi" class="relative px-6 py-3" x-data="{ isOpen: dropdownStatus.programStudi }">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-4">Program Studi</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="isOpen" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="seleksimahasiswabaru">Seleksi Mahasiswa Baru</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Mahasiswa Asing
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Pembelajaran Praktikum
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <script>
                    // Objek yang menyimpan status untuk setiap tombol dropdown
                    var dropdownStatus = {
                        capaianTridharma: false,
                        akreditasiKerjasama: false,
                        dataLuaran: false
                    };

                    // Fungsi untuk mengatur status dan toggle submenu sesuai id tombol dropdown
                    // yang diklik
                    function togglePagesMenu(id) {
                        dropdownStatus[id] = !dropdownStatus[id];
                    }

                    // Inisialisasi Alpine.js
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('dropdownStatus', () => ({
                            ...dropdownStatus
                        }));
                    });
                </script>

                <!-- <div class="px-6 my-6">
                        <button
                            class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Create account
                            <span class="ml-2" aria-hidden="true">+</span>
                        </button>
                    </div> -->
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <script>
                        function toggleSideMenu() {
                            // Mendapatkan elemen side menu
                            var sideMenu = document.getElementById('side-menu');

                            // Toggle visibility dari side menu
                            sideMenu.classList.toggle('hidden');
                        }
                    </script>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Pencarian..." aria-label="Search" />
                        </div>
                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>
                        <!-- Notifications menu -->
                        <li class="relative">
                            <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu" aria-label="Notifications" aria-haspopup="true">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                </svg>
                                <!-- Notification badge -->
                                <span aria-hidden="true" class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                            </button>
                            <template x-if="isNotificationsMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu" @keydown.escape="closeNotificationsMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <span>Notifikasi</span>
                                            <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                                13
                                            </span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <span>blabla</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                        <!-- Profile menu -->
                        <li class="relative">
                            <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                                <img class="object-cover w-8 h-8 rounded-full" src="data:image/png;base64,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" alt="" aria-hidden="true" />
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" stroke="currentColor">
                                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            <span>Profil</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" stroke="currentColor">
                                                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" stroke="currentColor">
                                                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            <span>Log out</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                </div>
            </header>

            <?= $this->renderSection('content'); ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>