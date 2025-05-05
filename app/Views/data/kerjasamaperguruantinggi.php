<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main class="h-full overflow-y-auto">

    <div class="container px-6 mx-auto grid">
        <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Kerjasama Perguruan Tinggi
        </h2> -->
        <div></div>
        <h2
            class="my-6 mb-4 text-xl font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Kerjasama Perguruan Tinggi
        </h2>
        <div class="my-6 mb-4">
            <button
                @click="openModal"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Tambah Data
            </button>
        </div>
        <div
            x-show="isModalOpen"
            x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
            style="display: none;">
            <!-- Modal -->
            <div
                x-show="isModalOpen"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform translate-y-1/2"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0  transform translate-y-1/2"
                @click.away="closeModal"
                @keydown.escape="closeModal"
                class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                role="dialog"
                id="modal">
                <!-- Remove header if you don't want a close icon. Use modal body to place modal
                tile. -->
                <header class="flex justify-end">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                        aria-label="close"
                        @click="closeModal">
                        <svg
                            class="w-4 h-4"
                            fill="currentColor"
                            viewbox="0 0 20 20"
                            role="img"
                            aria-hidden="true">
                            <path
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </header>
                <!-- Modal body -->
                <div class="mt-4 mb-6">
                    <!-- Modal title -->
                    <p class="mb-4 text-lg font-semibold text-gray-700 dark:text-gray-300">
                        Form Input Kerjasama Perguruan Tinggi
                    </p>
                    <!-- Modal description -->
                <form id="auditForm" action="<?= base_url('kerjasamaperguruantinggi') ?>" method="POST">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Lembaga Mitra</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="lembaga_mitra"
                                placeholder="Nama Lembaga..."/>
                        </label>
                        <label class="block text-sm mt-4">Tingkat</label>
                            <label class="inline-flex text-sm mt-2">
                                <input
                                    class="text-purple-600 form-checkbox mt-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="internasional" type="checkbox" value="1"/>
                                    <span class="ml-2 mt-2">Internasional</span>
                            </label>
                            <label class="inline-flex text-sm mt-2">
                                <input
                                    class="text-purple-600 form-checkbox ml-2 mt-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="nasional" type="checkbox" value="1"/>
                                    <span class="ml-2 mt-2">Nasional</span>
                            </label>
                            <label class="inline-flex text-sm mt-2">
                                <input
                                    class="text-purple-600 form-checkbox ml-2 mt-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="lokal" type="checkbox" value="1"/>
                                    <span class="ml-2 mt-2">Wilayah/Lokal</span>
                            </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Bentuk Kegiatan</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="3" name="bentuk_kegiatan"
                                placeholder="Bentuk Kegiatan..."></textarea>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Bukti Kerjasama</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="bukti_kerjasama" type="url" placeholder="Link File LKPS..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Nama Ketua Jurusan</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="lembaga_mitra"
                                placeholder="Nama Ketua Jurusan..."/>
                        </label>
                        <div class="flex mt-6 text-sm justify-end">
                            <button
                                class="px-4 py-2 justify-end text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" name="simpan">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
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
                </div>
            </div>
        </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center" rowspan="2">No</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Lembaga Mitra</th>
                            <th class="px-4 py-3 text-center" colspan="3">Tingkat</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Bentuk Kegiatan/ Manfaat</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Bukti Kerjasama</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Nama Ketua Jurusan</th>
                            <th class="px-4 py-3 text-center" rowspan="2">Aksi</th>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-center">Internasional</th>
                            <th class="px-4 py-3 text-center">Nasional</th>
                            <th class="px-4 py-3 text-center">Wilayah/ Lokal</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php foreach ($paginasi as $pg) : ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3"><?= $pg['id']; ?></td>
                            <td class="px-4 py-3"><?= $pg['lembaga_mitra']; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pg['internasional'] ? '✔️' : ''; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pg['nasional'] ? '✔️' : ''; ?></td>
                            <td class="px-4 py-3 text-center"><?= $pg['lokal'] ? '✔️' : ''; ?></td>
                            <td class="px-4 py-3"><?= $pg['bentuk_kegiatan']; ?></td>
                            <td class="px-4 py-3"><a href="<?= $pg['bukti_kerjasama']; ?>" target="_blank" class="text-purple-600 hover:underline">Lihat Bukti</a></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3">
                            <div class="flex items-center space-x-3">
                                        <button
                                            type="button"
                                            class="edit-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-lg active:bg-green-400 hover:bg-green-400 focus:outline-none focus:shadow-outline-green"
                                            data-id="<?= $pg['id']; ?>"
                                            data-lembaga_mitra="<?= $pg['lembaga_mitra']; ?>"
                                            data-internasional="<?= $pg['internasional']; ?>"
                                            data-nasional="<?= $pg['nasional']; ?>"
                                            data-lokal="<?= $pg['lokal']; ?>"
                                            data-bentuk_kegiatan="<?= $pg['bentuk_kegiatan']; ?>"
                                            data-bukti_kerjasama="<?= $pg['bukti_kerjasama']; ?>"
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
                                                    form.action = `<?= base_url('kerjasamaperguruantinggi') ?>/${id}`;

                                                    // Change modal title
                                                    modalTitle.innerText = 'Edit Data Sertifikasi/Akreditasi Eksternal';
                                                });
                                            });
                                        });
                                        </script>
                                        <form action="/kerjasamaperguruantinggi/<?= $pg['id'] ?>" method="post" class="flex items-center" id="deleteForm<?= $pg['id'] ?>">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="button" onclick="confirmDelete(<?= $pg['id'] ?>)" class="delete-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red" name="btn-hapus" data-id="<?= $pg['id']; ?>">
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
            <div class="flex justify-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <!-- Pagination -->
            <?= $pager->links('paginasi', 'ps_pagination'); ?>
            </div>
        </div>
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Rekap Kerjasama
            </h4>
            <div class="text-gray-600 dark:text-gray-400">
                <p><strong>Nasional:</strong> <?= $totalNasional ?></p>
                <p><strong>Internasional:</strong> <?= $totalInternasional ?></p>
                <p><strong>Lokal:</strong> <?= $totalLokal ?></p>
            </div>
        </div>
    </div>

</main>

<?= $this->endSection(); ?>