<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main class="h-full overflow-y-auto">

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Kecukupan Dosen
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <canvas id="chartData"></canvas>
        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center" rowspan="2">No</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Unit Pengelola</th>
                            <th class="px-4 py-3 text-center" colspan="3">Pendidikan Tertinggi</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Jumlah</th>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-xs">Doktor/ Doktor Terapan/Subspesialis</th>
                            <th class="px-4 py-3 text-xs">Magister/ Magister Terapan/Spesialis</th>
                            <th class="px-4 py-3 text-xs">Profesi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php foreach ($kecukupandosen as $kd) : ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3"><?= $kd->id; ?></td>
                            <td class="px-4 py-3"><?= $kd->unit_pengelola; ?></td>
                            <td class="px-4 py-3"><?= $kd->doktor; ?></td>
                            <td class="px-4 py-3"><?= $kd->magister; ?></td>
                            <td class="px-4 py-3"><?= $kd->profesi; ?></td>
                            <td class="px-4 py-3"><?= $kd->jumlah; ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<script src="<?= base_url('assets/js/sumberdayamanusia/kecukupandosen/charts-bars.js') ?>" defer="defer"></script>
<!-- <script src="<?= base_url('assets/js/sumberdayamanusia/kecukupandosen/index.js') ?>" defer="defer"></script> -->
<?= $this->endSection(); ?>