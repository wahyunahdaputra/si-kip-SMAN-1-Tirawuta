<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Dashboard
                        </h2> -->
<<<<<<< HEAD
                    <!-- Charts -->
                    <div></div>
            <h3 class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
                        Data Audit Keuangan Eksternal
                    </h3>
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="relative w-full whitespace-no-wrap table-sortable" id="listAkeStatus">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                                        <td></td>

                                        <td class="px-2 py-3">
                                            <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                                        </td>
                                        <td class="px-2 py-3">
                                            <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                                        </td>
                                        <td class="px-2 py-3">
                                            <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                                        </td>
                                        <td class="px-2 py-3">
                                            <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                                        </td>
                                    </tr>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="sticky top-0 px-4 py-3">No.</th>
                                    <th class="sticky top-0 px-4 py-3">Lembaga/Audit</th>
                                    <th class="sticky top-0 px-4 py-3">Tahun</th>
                                    <th class="sticky top-0 px-4 py-3">Opini</th>
                                    <th class="sticky top-0 px-4 py-3">Keterangan</th>
                                    </tr>
                                </thead>

                                <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <?php foreach ($auditkeuanganeks as $au) : ?>
                                        <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3"><?= $au->id; ?></td>
                                        <td class="px-4 py-3"><?= $au->lembaga_audit; ?></td>
                                        <td class="px-4 py-3"><?= $au->tahun; ?></td>
                                        <td class="px-4 py-3"><?= $au->opini; ?></td>
                                        <td class="px-4 py-3"><?= $au->keterangan; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                                    </table>
                            <script>
                                function filterData() {
                                    var inputs = document.querySelectorAll('.filter-input');
                                    var table, tr, td, i, j, txtValue, filter;

                                    table = document.getElementById("listAkeStatus");
                                    tr = table.getElementsByTagName("tr");

                                    for (i = 0; i < tr.length; i++) {
                                        if (!tr[i].classList.contains('always-visible')) { // Periksa apakah baris memiliki kelas always-visible
                                            tr[i].style.display = ""; // Jika tidak, tampilkan barisnya
                                        }

                                        for (j = 0; j < inputs.length; j++) {
                                            filter = inputs[j].value.toUpperCase();
                                            td = tr[i].getElementsByTagName("td")[j + 1]; // Kolom input dimulai dari indeks ke-1

                                            if (td) {
                                                txtValue = td.textContent || td.innerText;

                                                if (txtValue.toUpperCase().indexOf(filter) === -1 && !tr[i].classList.contains('always-visible')) {
                                                    tr[i].style.display = "none"; // Sembunyikan baris jika tidak cocok dengan salah satu input, kecuali jika memiliki kelas always-visible
                                                }
                                            }
                                        }
                                    }
                                }
                            </script>
                            <link rel="stylesheet" href="<?= base_url('assets/css/home/style.css') ?>">
                            <script src="<?= base_url('assets/js/home/table-sort.js') ?>"></script>

                        </div>
                    </div>
                </div>
            </main>
            <?= $this->endSection(); ?>
=======
        <!-- Charts -->
        <div></div>
        <h3 class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Daftar Status Akreditasi Program Studi
        </h3>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="relative w-full whitespace-no-wrap table-sortable" id="listAkeStatus">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                            <td></td>

                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input" type="text" name="" onkeyup="filterData()">
                            </td>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="sticky top-0 px-4 py-3">No.</th>
                            <th class="sticky top-0 px-4 py-3">Lembaga/Audit</th>
                            <th class="sticky top-0 px-4 py-3">Tahun</th>
                            <th class="sticky top-0 px-4 py-3">Opini</th>
                            <th class="sticky top-0 px-4 py-3">Keterangan</th>
                        </tr>
                        </thead>

                        <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <?php foreach ($auditkeuanganeks as $au) : ?>
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3"><?= $au->id; ?></td>
                                    <td class="px-4 py-3"><?= $au->lembaga_audit; ?></td>
                                    <td class="px-4 py-3"><?= $au->tahun; ?></td>
                                    <td class="px-4 py-3"><?= $au->opini; ?></td>
                                    <td class="px-4 py-3"><?= $au->keterangan; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                </table>

                <link rel="stylesheet" href="<?= base_url('assets/css/home/style.css') ?>">
                <script src="<?= base_url('assets/js/auditkeuanganeks/auditkeuanganeks.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>

            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>
>>>>>>> bc4e1abfa25f3c5a98e12a7592ebb9334c01845e
