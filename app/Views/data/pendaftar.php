<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <style>
            .text-purple {
            color: #6f42c1 !important;
            }
        </style>
        <div class="flex justify-between items-center mt-6 mb-2">
            <h2 class="text-lg font-semibold text-purple">
                Pendaftar KIP SMAN 1 Tirawuta
            </h2>
            <div class="space-x-2">
                <button class="inline-flex items-center px-4 py-2 text-white bg-blue-500 hover:bg-green-600 rounded-md text-sm">
                    <i class="fas fa-plus mr-2"></i> Tambah
                </button>
                <button class="inline-flex items-center px-4 py-2 text-white bg-green-400 hover:bg-blue-600 rounded-md text-sm">
                    <i class="fas fa-edit mr-2"></i> Edit
                </button>
                <button class="inline-flex items-center px-4 py-2 text-white bg-red-600 hover:bg-red-600 rounded-md text-sm">
                    <i class="fas fa-trash-alt mr-2"></i> Hapus Semua
                </button>
            </div>
        </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table
                class="relative w-full table-sortable"
                id="listAkeStatus">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                        <td colspan="6"></td>
                        <td class="px-2 py-3 text-right">
                            <div class="relative w-full max-w-xs ml-auto">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-400 pointer-events-none">
                                    <i class="fas fa-search"></i>
                                </div>
                                <input
                                    class="block w-full pl-8 pr-3 py-2 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-md"
                                    type="text"
                                    placeholder="Pencarian..."
                                    onkeyup="filterData()">
                            </div>
                        </td>
                    </tr>
                    <tr
                        class="text-xs text-center font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="sticky top-0 px-4 py-3">No.</th>
                        <th class="sticky top-0 px-4 py-3">Lembaga Sertifikasi/Akreditasi Eksternal</th>
                        <th class="sticky top-0 px-4 py-3">Jenis Sertifikasi/Akreditasi</th>
                        <th class="sticky top-0 px-4 py-3">Lingkup</th>
                        <th class="sticky top-0 px-4 py-3">Tingkat</th>
                        <th class="sticky top-0 px-4 py-3">Masa Berlaku</th>
                        <th class="sticky top-0 px-4 py-3">Keterangan</th>
                    </tr>
                </thead>

                <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php foreach ($paginasi as $pg) : ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3"><?= $pg['id']; ?></td>
                        <td class="px-4 py-3"><?= $pg['lembaga']; ?></td>
                        <td class="px-4 py-3"><?= $pg['jenis_sertifikat']; ?></td>
                        <td class="px-4 py-3"><?= $pg['lingkup']; ?></td>
                        <td class="px-4 py-3"><?= $pg['tingkat']; ?></td>
                        <td class="px-4 py-3"><?= $pg['masa_berlaku']; ?></td>
                        <td class="px-4 py-3"><?= $pg['keterangan']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <script>
                function filterData() {
                    var inputs = document.querySelectorAll('.filter-input');
                    var table,
                        tr,
                        td,
                        i,
                        j,
                        txtValue,
                        filter;

                    table = document.getElementById("listAkeStatus");
                    tr = table.getElementsByTagName("tr");

                    for (i = 0; i < tr.length; i++) {
                        if (!tr[i].classList.contains('always-visible')) { // Periksa apakah baris memiliki kelas always-visible
                            tr[i].style.display = ""; // Jika tidak, tampilkan barisnya
                        }

                        for (j = 0; j < inputs.length; j++) {
                            filter = inputs[j]
                                .value
                                .toUpperCase();
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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <script src="<?= base_url('assets/js/home/table-sort.js') ?>"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
            <div class="flex justify-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <!-- Pagination -->
            <?= $pager->links('paginasi', 'ps_pagination'); ?>
        </div>
        </div>
    </div>
</div>
</main>
<?= $this->endSection(); ?>