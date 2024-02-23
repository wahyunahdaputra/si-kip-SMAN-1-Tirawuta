<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div></div>
        <h3 class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Sitasi Karya Ilmiah Internasional
        </h3>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="relative w-full whitespace-no-wrap table-sortable" id="listSitasiAlmiah">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                            <td></td>

                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listSitasiAlmiah" list="listSitasiAlmiah.Penulis" type="text" name="" oninput="filterData('listSitasiAlmiah')">
                            </td>
                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listSitasiAlmiah" list="listSitasiAlmiah.Judul Artikel yang Disitasi (Jurnal, Volume, Tahun, Nomor, Halaman)" type="text" name="" oninput="filterData('listSitasiAlmiah')">
                            </td>
                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listSitasiAlmiah" list="listSitasiAlmiah.Jumlah Artikel" type="text" name="" oninput="filterData('listSitasiAlmiah')">
                            </td>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="sticky top-0 px-4 py-3">No.</th>
                            <th class="sticky top-0 px-4 py-3">Penulis</th>
                            <th class="sticky top-0 px-4 py-3">Judul Artikel yang Disitasi (Jurnal, Volume, Tahun, Nomor, Halaman)</th>
                            <th class="sticky top-0 px-4 py-3">Jumlah Artikel</th>
                        </tr>
                    </thead>

                    <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($paginasi as $pg) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3"><?= $pg['id']; ?></td>
                                <td class="px-4 py-3"><?= $pg['penulis']; ?></td>
                                <td class="px-4 py-3"><?= $pg['judul_artikel']; ?></td>
                                <td class="px-4 py-3"><?= $pg['jumlah_artikel']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <!-- Pagination -->
                <?= $pager->links('paginasi', 'ps_pagination'); ?>
            </div>
        </div>
    </div>
</main>

<datalist id="listSitasiAlmiah.Penulis"></datalist>
<datalist id="listSitasiAlmiah.Judul Artikel yang Disitasi (Jurnal, Volume, Tahun, Nomor, Halaman)"></datalist>
<datalist id="listSitasiAlmiah.Jumlah Artikel"></datalist>

<link rel="stylesheet" href="<?= base_url('assets/css/util/table/style.css') ?>">
<script src="<?= base_url('assets/js/sitasiilmiah/index.js') ?>"></script>
<script src="<?= base_url('assets/js/util/table/filter-data.js') ?>"></script>
<script src="<?= base_url('assets/js/util/table/datalist-autocomplete.js') ?>"></script>
<script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>

<?= $this->endSection(); ?>