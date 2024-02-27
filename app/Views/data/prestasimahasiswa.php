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
            Data Prestasi Akademik Mahasiswa
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
            class="fixed overflow-y-auto inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
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
                class="w-full overflow-y-auto px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
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
                        Form Input Prestasi Akademik Mahasiswa
                    </p>
                    <!-- Modal description -->
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block mt-8 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Nama</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Nama..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                            L/P
                            </span>
                            <select
                            class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            >
                            <option>L</option>
                            <option>P</option>
                            </select>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">NIM</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="NIM..." type="number"/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Fakultas</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Fakultas..."/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Nama Kegiatan</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Nama Kegiatan..."/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Waktu Kegiatan</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Waktu Kegiatan..."/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Tempat</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Tempat..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                            Tingkatan
                            </span>
                            <select
                            class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            >
                            <option>Regional</option>
                            <option>Nasional</option>
                            </select>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Hasil</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Hasil..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">No. SK/Surat Tugas</span>
                            <textarea
                                class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="3"
                                placeholder="No. SK/Surat Tugas..."></textarea>
                        </label>
                        <div class="flex mt-6 text-sm justify-end">
                            <button
                                class="px-4 py-2 justify-end text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="relative w-full table-sortable" id="listAkeStatus">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                            <td></td>

                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Nama" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.L/P" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.NIM" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Fakultas" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Nama Kegiatan" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Waktu Kegiatan" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Tempat" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Tingkatan" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Hasil" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listAkeStatus" type="text" name="" list="listAkeStatus.Nomor SK/Surat Tugas" oninput="filterData('listAkeStatus')" autocomplete="on">
                            </td>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No.</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">L/P</th>
                            <th class="px-4 py-3">NIM</th>
                            <th class="px-4 py-3">Fakultas</th>
                            <th class="px-4 py-3">Nama Kegiatan</th>
                            <th class="px-4 py-3">Waktu Kegiatan</th>
                            <th class="px-4 py-3">Tempat</th>
                            <th class="px-4 py-3">Tingkatan</th>
                            <th class="px-4 py-3">Hasil</th>
                            <th class="px-4 py-3">Nomor SK/Surat Tugas</th>
                        </tr>
                    </thead>

                    <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($paginasi as $pg) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3"><?= $pg['id']; ?></td>
                                <td class="px-4 py-3"><?= $pg['nama']; ?></td>
                                <td class="px-4 py-3"><?= $pg['jenis_kelamin']; ?></td>
                                <td class="px-4 py-3"><?= $pg['nim']; ?></td>
                                <td class="px-4 py-3"><?= $pg['fakultas']; ?></td>
                                <td class="px-4 py-3"><?= $pg['nama_kegiatan']; ?></td>
                                <td class="px-4 py-3"><?= $pg['waktu_kegiatan']; ?></td>
                                <td class="px-4 py-3"><?= $pg['tempat']; ?></td>
                                <td class="px-4 py-3"><?= $pg['tingkatan']; ?></td>
                                <td class="px-4 py-3"><?= $pg['hasil']; ?></td>
                                <td class="px-4 py-3"><?= $pg['dokumen_fisik']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

                <div class="flex justify-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <!-- Pagination -->
                    <?= $pager->links('paginasi', 'ps_pagination'); ?>
                </div>
            </div>
        </div>

        <?= $this->endSection(); ?>

        <?= $this->extend('layout/template'); ?>
        <?= $this->section('content'); ?>
        <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Dashboard
                        </h2> -->
        <!-- Charts -->
        <div></div>
        <h3 class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Prestasi Non Akademik Mahasiswa
        </h3>
        <div class="my-6 mb-4">
            <button
                @click="openModal"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Tambah Data
            </button>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="relative w-full table-sortable" id="listNonAkademik">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                            <td></td>

                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Nama" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.L/P" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.NIM" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Fakultas" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Nama Kegiatan" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Waktu Kegiatan" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Tempat" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Tingkatan" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Hasil" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                            <td class="px-2 py-3">
                                <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listNonAkademik" type="text" name="" list="listNonAkademik.Dokumen Fisik" oninput="filterData('listNonAkademik')" autocomplete="on">
                            </td>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="sticky top-0 px-4 py-3">No.</th>
                            <th class="sticky top-0 px-4 py-3">Nama</th>
                            <th class="sticky top-0 px-4 py-3">L/P</th>
                            <th class="sticky top-0 px-4 py-3">NIM</th>
                            <th class="sticky top-0 px-4 py-3">Fakultas</th>
                            <th class="sticky top-0 px-4 py-3">Nama Kegiatan</th>
                            <th class="sticky top-0 px-4 py-3">Waktu Kegiatan</th>
                            <th class="sticky top-0 px-4 py-3">Tempat</th>
                            <th class="sticky top-0 px-4 py-3">Tingkatan</th>
                            <th class="sticky top-0 px-4 py-3">Hasil</th>
                            <th class="sticky top-0 px-4 py-3">Dokumen Fisik</th>
                        </tr>
                    </thead>

                    <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($paginasii as $pg) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3"><?= $pg['id']; ?></td>
                                <td class="px-4 py-3"><?= $pg['nama']; ?></td>
                                <td class="px-4 py-3"><?= $pg['jenis_kelamin']; ?></td>
                                <td class="px-4 py-3"><?= $pg['nim']; ?></td>
                                <td class="px-4 py-3"><?= $pg['fakultas']; ?></td>
                                <td class="px-4 py-3"><?= $pg['nama_kegiatan']; ?></td>
                                <td class="px-4 py-3"><?= $pg['waktu_kegiatan']; ?></td>
                                <td class="px-4 py-3"><?= $pg['tempat']; ?></td>
                                <td class="px-4 py-3"><?= $pg['tingkatan']; ?></td>
                                <td class="px-4 py-3"><?= $pg['hasil']; ?></td>
                                <td class="px-4 py-3"><?= $pg['dokumen_fisik']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

                <datalist id="listAkeStatus.Nama"></datalist>
                <datalist id="listAkeStatus.L/P"></datalist>
                <datalist id="listAkeStatus.NIM"></datalist>
                <datalist id="listAkeStatus.Fakultas"></datalist>
                <datalist id="listAkeStatus.Nama Kegiatan"></datalist>
                <datalist id="listAkeStatus.Waktu Kegiatan"></datalist>
                <datalist id="listAkeStatus.Tempat"></datalist>
                <datalist id="listAkeStatus.Tingkatan"></datalist>
                <datalist id="listAkeStatus.Hasil"></datalist>
                <datalist id="listAkeStatus.Nomor SK/Surat Tugas"></datalist>

                <datalist id="listNonAkademik.Nama"></datalist>
                <datalist id="listNonAkademik.L/P"></datalist>
                <datalist id="listNonAkademik.NIM"></datalist>
                <datalist id="listNonAkademik.Fakultas"></datalist>
                <datalist id="listNonAkademik.Nama Kegiatan"></datalist>
                <datalist id="listNonAkademik.Waktu Kegiatan"></datalist>
                <datalist id="listNonAkademik.Tempat"></datalist>
                <datalist id="listNonAkademik.Tingkatan"></datalist>
                <datalist id="listNonAkademik.Hasil"></datalist>
                <datalist id="listNonAkademik.Dokumen Fisik"></datalist>
                
                <div class="flex justify-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <!-- Pagination -->
                    <?= $pager->links('paginasii', 'ps_pagination'); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<link rel="stylesheet" href="<?= base_url('assets/css/util/table/style.css') ?>">
<script src="<?= base_url('assets/js/prestasimahasiswa/index.js') ?>"></script>
<script src="<?= base_url('assets/js/util/table/filter-data.js') ?>"></script>
<script src="<?= base_url('assets/js/util/table/datalist-autocomplete.js') ?>"></script>
<script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>

<?= $this->endSection(); ?>