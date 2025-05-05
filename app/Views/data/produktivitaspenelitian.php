<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main class="h-full overflow-y-auto">

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Produktivitas Penelitian & PKM
        </h2>

        <div class=" px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <canvas id="chartData"></canvas>
        </div>
        <h3 class="my-6 text-xl text-gray-700 dark:text-gray-200">
            Produktivitas Penelitian Dosen
        </h3>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center" rowspan="2">No</th>
                            <th class="px-4 py-3" rowspan="2">Sumber Pembiayaan</th>
                            <th class="px-4 py-3 text-center" colspan="3">Jumlah Judul Penelitian</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Jumlah</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Aksi</th>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center">TS-2</th>
                            <th class="px-4 py-3 text-center">TS-1</th>
                            <th class="px-4 py-3 text-center">TS</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php foreach ($produktivitaspenelitian as $pp) : ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-center"><?= $pp->id; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pp->sumber_biaya; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pp->ts1; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pp->ts2; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pp->ts3; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pp->jumlah; ?></td>
                            <td class="px-4 py-3 text-center">
                            <div class="flex items-center space-x-3">
                                        <button
                                            type="button"
                                            class="edit-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-lg active:bg-green-400 hover:bg-green-400 focus:outline-none focus:shadow-outline-green"
                                            data-id="<?= $pp->id; ?>"
                                            data-sumber_biaya="<?= $pp->sumber_biaya; ?>"
                                            data-ts1="<?= $pp->ts1; ?>"
                                            data-ts2="<?= $pp->ts2; ?>"
                                            data-ts3="<?= $pp->ts3; ?>"
                                            data-jumlah="<?= $pp->jumlah; ?>"
                                            @click="isModalOpen = true">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 512 512">
                                                <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                            </svg>
                                        </button>
                                        <script>
                                        document.addEventListener('DOMContentLoaded', (event) => {
                                            const editButtons = document.querySelectorAll('.edit-button');
                                            const modal = document.getElementById('modal');
                                            const form = modal.querySelector('form');
                                            const modalTitle = modal.querySelector('.modal-title');

                                            editButtons.forEach(button => {
                                                button.addEventListener('click', () => {
                                                    const id = button.getAttribute('data-id');
                                                    const sumber_biaya = button.getAttribute('data-sumber_biaya');
                                                    const ts1 = button.getAttribute('data-ts1');
                                                    const ts2 = button.getAttribute('data-ts2');
                                                    const ts3 = button.getAttribute('data-ts3');
                                                    const jumlah = button.getAttribute('data-jumlah');                                          

                                                    // Populate the form with the fetched data
                                                    form.querySelector('input[name="sumber_biaya"]').value = sumber_biaya;
                                                    form.querySelector('input[name="ts1"]').value = ts1;
                                                    form.querySelector('input[name="ts2"]').value = ts2;
                                                    form.querySelector('input[name="ts3"]').value = ts3;
                                                    form.querySelector('input[name="jumlah"]').value = jumlah;

                                                    // Change form action to the update route
                                                    form.action = `<?= base_url('produktivitaspenelitian') ?>/${id}`;

                                                    // Change modal title
                                                    modalTitle.innerText = 'Edit Data Produktivitas Penelitian';
                                                });
                                            });
                                        });
                                        </script>
                                        <form action="/bebankerjadosen/<?= $pp->id; ?>" method="post" class="flex items-center" id="deleteForm<?= $pp->id; ?>">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="button" onclick="confirmDelete(<?= $pp->id; ?>)" class="delete-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red" name="btn-hapus" data-id="<?= $pp->id; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 448 512">
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                </svg>
                                            </button>
                                        </form>
                                        <script>
                                            function confirmDelete(id) {
                                                Swal.fire({
                                                    title: "Hapus data?",
                                                    text: "Yakin data ini mau dihapus?",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#3085d6",
                                                    cancelButtonColor: "#d33",
                                                    confirmButtonText: "Ya, hapus!"
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // Submit the form for deletion
                                                        document.getElementById('deleteForm' + id).submit();
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                <script>
                                    $(function(){

                                        <?php if(session()->has("status")) { ?>
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Berhasil',
                                                text: '<?= session("status") ?>'
                                            })
                                        <?php } ?>
                                    });
                                </script>
                        </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <h3 class="my-6 text-xl text-gray-700 dark:text-gray-200">
            Produktivitas Penelitian PKM
        </h3>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center" rowspan="2">No</th>
                            <th class="px-4 py-3" rowspan="2">Sumber Pembiayaan</th>
                            <th class="px-4 py-3 text-center" colspan="3">Jumlah Judul Penelitian</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Jumlah</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Aksi</th>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center">TS-2</th>
                            <th class="px-4 py-3 text-center">TS-1</th>
                            <th class="px-4 py-3 text-center">TS</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php foreach ($produktivitaspenelitian as $pm) : ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-center"><?= $pm->id; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pm->sumber_biaya; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pm->ts1; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pm->ts2; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pm->ts3; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pm->jumlah; ?></td>
                            <td class="px-4 py-3 text-center">
                            <div class="flex items-center space-x-3">
                                        <button
                                            type="button"
                                            class="edit-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-lg active:bg-green-400 hover:bg-green-400 focus:outline-none focus:shadow-outline-green"
                                            data-id="<?= $pm->id; ?>"
                                            data-sumber_biaya="<?= $pm->sumber_biaya; ?>"
                                            data-ts1="<?= $pm->ts1; ?>"
                                            data-ts2="<?= $pm->ts2; ?>"
                                            data-ts3="<?= $pm->ts3; ?>"
                                            data-jumlah="<?= $pm->jumlah; ?>"
                                            @click="isModalOpen = true">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 512 512">
                                                <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                            </svg>
                                        </button>
                                        <script>
                                        document.addEventListener('DOMContentLoaded', (event) => {
                                            const editButtons = document.querySelectorAll('.edit-button');
                                            const modal = document.getElementById('modal');
                                            const form = modal.querySelector('form');
                                            const modalTitle = modal.querySelector('.modal-title');

                                            editButtons.forEach(button => {
                                                button.addEventListener('click', () => {
                                                    const id = button.getAttribute('data-id');
                                                    const lembaga_mitra = button.getAttribute('data-lembaga_mitra');
                                                    const internasional = button.getAttribute('data-internasional');
                                                    const nasional = button.getAttribute('data-nasional');
                                                    const lokal = button.getAttribute('data-lokal');
                                                    const bentuk_kegiatan = button.getAttribute('data-bentuk_kegiatan');
                                                    const bukti_kerjasama = button.getAttribute('data-bukti_kerjasama');

                                                    // Populate the form with the fetched data
                                                    form.querySelector('input[name="lembaga_mitra"]').value = lembaga_mitra;
                                                    form.querySelector('input[name="internasional"]').value = internasional;
                                                    form.querySelector('input[name="nasional"]').value = nasional;
                                                    form.querySelector('input[name="lokal"]').value = lokal;
                                                    form.querySelector('textarea[name="bentuk_kegiatan"]').value = bentuk_kegiatan;
                                                    form.querySelector('input[name="bukti_kerjasama"]').value = bukti_kerjasama;

                                                    // Change form action to the update route
                                                    form.action = `<?= base_url('bebankerjadosen') ?>/${id}`;

                                                    // Change modal title
                                                    modalTitle.innerText = 'Edit Data Sertifikasi/Akreditasi Eksternal';
                                                });
                                            });
                                        });
                                        </script>
                                        <form action="/bebankerjadosen/<?= $pp->id; ?>" method="post" class="flex items-center" id="deleteForm<?= $pp->id; ?>">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="button" onclick="confirmDelete(<?= $pp->id; ?>)" class="delete-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red" name="btn-hapus" data-id="<?= $pp->id; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 448 512">
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                </svg>
                                            </button>
                                        </form>
                                        <script>
                                            function confirmDelete(id) {
                                                Swal.fire({
                                                    title: "Hapus data?",
                                                    text: "Yakin data ini mau dihapus?",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#3085d6",
                                                    cancelButtonColor: "#d33",
                                                    confirmButtonText: "Ya, hapus!"
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // Submit the form for deletion
                                                        document.getElementById('deleteForm' + id).submit();
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                <script>
                                    $(function(){

                                        <?php if(session()->has("status")) { ?>
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Berhasil',
                                                text: '<?= session("status") ?>'
                                            })
                                        <?php } ?>
                                    });
                                </script>
                        </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<script src="<?= base_url('assets/js/sumberdayamanusia/produktivitaspenelitian/charts-bars.js') ?>" defer="defer"></script>
<!-- <script src="<?= base_url('assets/js/sumberdayamanusia/produktivitaspenelitian/index.js') ?>" defer="defer"></script> -->

<?= $this->endSection(); ?>