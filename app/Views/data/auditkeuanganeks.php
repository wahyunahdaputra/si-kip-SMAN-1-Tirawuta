<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard </h2> -->
        <!-- Charts -->
        <div></div>
        <h3
            class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Audit Keuangan Eksternal
        </h3>
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
            class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
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
                        Form Input Audit Keuangan Eksternal
                    </p>
                    <!-- Modal description -->
                <form id="auditForm" action="<?= base_url('auditkeuanganeks') ?>" method="POST">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Lembaga/Audit</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="lembaga_audit"
                                placeholder="Nama Lembaga..."/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Tahun</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="tahun"
                                placeholder="Tahun..." type="number"/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Opini</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="opini"
                                placeholder="Masukkan Opini..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Keterangan</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="3" name="keterangan"
                                placeholder="Masukkan Keterangan..."></textarea>
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
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="relative w-full table-sortable" id="listAudit">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                        <td></td>

                        <td class="px-2 py-3">
                            <input
                                class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit"
                                type="text"
                                name=""
                                list="listAudit.Lembaga/Audit"
                                oninput="filterData('listAudit')">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit"
                                type="text"
                                name=""
                                list="listAudit.Tahun"
                                oninput="filterData('listAudit')">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit"
                                type="text"
                                name=""
                                list="listAudit.Opini"
                                oninput="filterData('listAudit')">
                        </td>
                        <td class="px-2 py-3">
                            <input
                                class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAudit"
                                type="text"
                                name=""
                                list="listAudit.Keterangan"
                                oninput="filterData('listAudit')">
                        </td>
                    </tr>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="sticky top-0 px-4 py-3">No.</th>
                        <th class="sticky top-0 px-4 py-3">Lembaga/Audit</th>
                        <th class="sticky top-0 px-4 py-3">Tahun</th>
                        <th class="sticky top-0 px-4 py-3">Opini</th>
                        <th class="sticky top-0 px-4 py-3">Keterangan</th>
                        <th class="sticky top-0 px-4 py-3">Aksi</th>
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
                        <td class="px-4 py-3">
                        <div class="flex items-center space-x-3">
                                        <button
                                            type="button"
                                            class="edit-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-lg active:bg-green-400 hover:bg-green-400 focus:outline-none focus:shadow-outline-green"
                                            data-id="<?= $au->id; ?>"
                                            data-lembaga_audit="<?= $au->lembaga_audit; ?>"
                                            data-tahun="<?= $au->tahun; ?>"
                                            data-opini="<?= $au->opini; ?>"
                                            data-keterangan="<?= $au->keterangan; ?>"
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
                                                    const lembaga_audit = button.getAttribute('data-lembaga_audit');
                                                    const tahun = button.getAttribute('data-tahun');
                                                    const opini = button.getAttribute('data-opini');
                                                    const keterangan = button.getAttribute('data-keterangan');

                                                    // Populate the form with the fetched data
                                                    form.querySelector('input[name="lembaga_audit"]').value = lembaga_audit;
                                                    form.querySelector('input[name="tahun"]').value = tahun;
                                                    form.querySelector('input[name="opini"]').value = opini;
                                                    form.querySelector('textarea[name="keterangan"]').value = keterangan;

                                                    // Change form action to the update route
                                                    form.action = `<?= base_url('auditkeuanganeks') ?>/${id}`;

                                                    // Change modal title
                                                    modalTitle.innerText = 'Edit Data Sertifikasi/Akreditasi Eksternal';
                                                });
                                            });
                                        });
                                        </script>
                                        <form action="/auditkeuanganeks/<?= $au->id; ?>" method="post" class="flex items-center" id="deleteForm<?= $au->id; ?>">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="button" onclick="confirmDelete(<?= $au->id; ?>)" class="delete-button flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red" name="btn-hapus" data-id="<?= $au->id; ?>">
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
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <datalist id="listAudit.Lembaga/Audit"></datalist>
            <datalist id="listAudit.Tahun"></datalist>
            <datalist id="listAudit.Opini"></datalist>
            <datalist id="listAudit.Keterangan"></datalist>

            <link
                rel="stylesheet"
                href="<?= base_url('assets/css/util/table/style.css') ?>">
            <script src="<?= base_url('assets/js/auditkeuanganeks/index.js') ?>"></script>
            <script src="<?= base_url('assets/js/util/table/filter-data.js') ?>"></script>
            <script src="<?= base_url('assets/js/util/table/datalist-autocomplete.js') ?>"></script>
            <script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

        </div>
    </div>
</div>
</main>
<?= $this->endSection(); ?>