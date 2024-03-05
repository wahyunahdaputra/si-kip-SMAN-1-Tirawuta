<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<?php
$jsonChartData = json_encode($ChartData);
echo "
<script>
    var chartDataArray = $jsonChartData;
</script>"
?>

<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Seleksi Mahasiswa Baru
        </h2>

        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="flex">
                <div class="flex flex-col w-full min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                        SNMPTN
                    </h4>
                    <canvas id="dataSeleksiSN"></canvas>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col w-full min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                        SBMPTN
                    </h4>
                    <canvas id="dataSeleksiSB"></canvas>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col w-full min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                        SMMPTN
                    </h4>
                    <canvas id="dataSeleksiSM"></canvas>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col w-full min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                        Total
                    </h4>
                    <canvas id="dataSeleksiTotal"></canvas>
                </div>
            </div>
        </div>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Tabel Detail Data berdasarkan Jalur Masuk
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Jalur Masuk
                </span>
                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option>SNMPTN</option>
                    <option>SBMPTN</option>
                    <option>SMMPTN</option>
                </select>
            </label>
        </div>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Sarjana
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-8">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Program Studi</th>
                            <th class="px-4 py-3">Peminat</th>
                            <th class="px-4 py-3">Daya Tampung</th>
                            <th class="px-4 py-3">Lulus Seleksi</th>
                            <th class="px-4 py-3">Registrasi Ulang</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">1</td>
                            <td class="px-4 py-3 text-sm">Teknik Informatika</td>
                            <td class="px-4 py-3 text-sm">1000</td>
                            <td class="px-4 py-3 text-sm">2000</td>
                            <td class="px-4 py-3 text-sm">3000</td>
                            <td class="px-4 py-3 text-sm">4000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Vokasi
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-8">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Program Studi</th>
                            <th class="px-4 py-3">Peminat</th>
                            <th class="px-4 py-3">Daya Tampung</th>
                            <th class="px-4 py-3">Lulus Seleksi</th>
                            <th class="px-4 py-3">Registrasi Ulang</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">1</td>
                            <td class="px-4 py-3 text-sm">D3 Sipil</td>
                            <td class="px-4 py-3 text-sm">1000</td>
                            <td class="px-4 py-3 text-sm">2000</td>
                            <td class="px-4 py-3 text-sm">3000</td>
                            <td class="px-4 py-3 text-sm">4000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script src="<?= base_url('assets/js/mahasiswa/seleksimahasiswabaru/charts-bars.js') ?>" defer="defer"></script>
<script src="<?= base_url('assets/js/mahasiswa/seleksimahasiswabaru/index.js') ?>" defer="defer"></script>

<?= $this->endSection(); ?>