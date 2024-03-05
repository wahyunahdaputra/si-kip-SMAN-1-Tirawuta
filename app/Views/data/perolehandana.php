<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main class="h-full overflow-y-auto">

    <div class="container px-6 mx-auto grid">
        <h2 class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Perolehan Dana
        </h2>
        <h4 class="mt-2 mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            3 Tahun Terakhir (2021-2024)
        </h4>

        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Jenis Dana
                </h4>
                <canvas id="chartData"></canvas>
            </div>
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Jumlah Dana
                </h4>
                <canvas id="chartData2"></canvas>
            </div>
        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center" rowspan="2">No</th>
                            <th class="px-4 py-3" rowspan="2">Sumber Dana</th>
                            <th class="px-4 py-3" rowspan="2">Jenis Dana</th>
                            <th class="px-4 py-3 text-center" colspan="3">Jumlah Dana (Rp)</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Jumlah (Rp)</th>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center">TS-2</th>
                            <th class="px-4 py-3 text-center">TS-1</th>
                            <th class="px-4 py-3 text-center">TS</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm text-center" rowspan="4">1</td>
                            <td class="px-4 py-3 text-sm" rowspan="3">Mahasiswa</td>
                            <td class="px-4 py-3 text-sm">3</td>
                            <td class="px-4 py-3 text-sm text-center">4</td>
                            <td class="px-4 py-3 text-sm text-center">5</td>
                            <td class="px-4 py-3 text-sm text-center">6</td>
                            <td class="px-4 py-3 text-sm text-center"></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">3</td>
                            <td class="px-4 py-3 text-sm text-center">4</td>
                            <td class="px-4 py-3 text-sm text-center">5</td>
                            <td class="px-4 py-3 text-sm text-center">6</td>
                            <td class="px-4 py-3 text-sm text-center"></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">3</td>
                            <td class="px-4 py-3 text-sm text-center">4</td>
                            <td class="px-4 py-3 text-sm text-center">5</td>
                            <td class="px-4 py-3 text-sm text-center">6</td>
                            <td class="px-4 py-3 text-sm text-center"></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm text-center" colspan="2">Jumlah</td>
                            <td class="px-4 py-3 text-sm text-center">4</td>
                            <td class="px-4 py-3 text-sm text-center">5</td>
                            <td class="px-4 py-3 text-sm text-center">6</td>
                            <td class="px-4 py-3 text-sm text-center">7</td>
                        </tr>
                    </tbody>
                    <tfoot class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-center" colspan="3">Jumlah</td>
                            <td class="px-4 py-3 text-sm text-center">4</td>
                            <td class="px-4 py-3 text-sm text-center">5</td>
                            <td class="px-4 py-3 text-sm text-center">6</td>
                            <td class="px-4 py-3 text-sm text-center">7</td>
                        </tr>
                    </tfoot>
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
                                    <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
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
    </div>

</main>

<script src="<?= base_url('assets/js/keuangan/perolehandana/charts-bars.js') ?>" defer="defer"></script>
<!-- <script src="<?= base_url('assets/js/keuangan/perolehandana/index.js') ?>" defer="defer"></script> -->

<?= $this->endSection(); ?>