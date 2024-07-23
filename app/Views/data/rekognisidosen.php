<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main class="h-full overflow-y-auto">

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Rekognisi Dosen
        </h2>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center">No</th>
                            <th class="px-4 py-3">Nama Dosen</th>
                            <th class="px-4 py-3">Bidang Keahlian</th>
                            <th class="px-4 py-3">Rekognisi</th>
                            <th class="px-4 py-3 text-center">Tahun</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php foreach ($rekognisidosen as $rd) : ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3"><?= $rd->id; ?></td>
                            <td class="px-4 py-3"><?= $rd->nama_dosen; ?></td>
                            <td class="px-4 py-3"><?= $rd->bidang_keahlian; ?></td>
                            <td class="px-4 py-3"><?= $rd->rekognisi; ?></td>
                            <td class="px-4 py-3"><?= $rd->tahun; ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<?= $this->endSection(); ?>