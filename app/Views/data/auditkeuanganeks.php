<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Dashboard
                        </h2> -->
        <!-- Charts -->
        <div></div>
        <h3 class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Audit Keuangan Eksternal
        </h3>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="relative w-full whitespace-no-wrap table-sortable" id="listAudit">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                            <td></td>

                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit" type="text" name="" list="listAudit.Lembaga/Audit" oninput="filterData('listAudit')">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit" type="text" name="" list="listAudit.Tahun" oninput="filterData('listAudit')">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit" type="text" name="" list="listAudit.Opini" oninput="filterData('listAudit')">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit" type="text" name="" list="listAudit.Keterangan" oninput="filterData('listAudit')">
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

                <datalist id="listAudit.Lembaga/Audit"></datalist>
                <datalist id="listAudit.Tahun"></datalist>
                <datalist id="listAudit.Opini"></datalist>
                <datalist id="listAudit.Keterangan"></datalist>

                <link rel="stylesheet" href="<?= base_url('assets/css/util/table/style.css') ?>">
                <script src="<?= base_url('assets/js/auditkeuanganeks/index.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/filter-data.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/datalist-autocomplete.js') ?>"></script>
                <script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>

            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>