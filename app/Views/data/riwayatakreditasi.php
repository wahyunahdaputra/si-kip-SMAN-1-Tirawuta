<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div></div>
        <h3 class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Riwayat Akreditasi | <?= $identifier ?>
        </h3>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Tahun Akreditasi</th>
                            <th class="px-4 py-3">Akreditasi</th>
                            <th class="px-4 py-3">Sertifikat</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($data as $dt) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <?= $dt->riwayat_tahun; ?>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <?= $dt->riwayat_akrd; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?= $dt->link_sertifikat; ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>