    <?= $this->extend('layout/template'); ?>
        <?= $this->section('content'); ?>
    <main class="h-full pb-16 overflow-y-auto">

    <div class="container px-6 mx-auto grid">
        <div></div>
        <h3
            class="my-6 mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
            Data Sertifikasi/Akreditasi Eksternal
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
                        Form Input Sertifikasi/Akreditasi Eksternal
                    </p>
                    <!-- Modal description -->
                    <form action="<?= base_url('akreksternal') ?>" method="POST">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Lembaga Sertifikasi/Akreditasi</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="lembaga"
                                placeholder="Nama Lembaga..."/>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Jenis Sertifikasi/Akreditasi</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="jenis_sertifikat"
                                placeholder="Jenis Sertifikasi/Akreditasi..."/>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                            Lingkup
                            </span>
                            <select
                            class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="lingkup"
                            >
                            <option>PT/Fakultas</option>
                            <option>Unit</option>
                            </select>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                            Tingkat
                            </span>
                            <select
                            class="block w-full mt-2 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="tingkat"
                            >
                            <option>...</option>
                            <option>Internasional</option>
                            <option>Nasional</option>
                            </select>
                        </label>
                        <label class="block text-sm mt-4">
                            <span class="text-gray-700 dark:text-gray-400">Masa Berlaku</span>
                            <input
                                class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="masa_berlaku"
                                placeholder="Masa Berlaku..."/>
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
        

        <div class="flex flex-row mt-6">

          <img src="<?= base_url('assets/img/logo-uho-56px.png') ?>" alt="logo universitas halu oleo">

          <div class="flex flex-col ml-4">

            <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              Akreditasi Program Studi
            </h2>

            <div class="mt-3 text-xs font-semibold text-gray-700 dark:text-gray-200">
              Badan Akreditasi Nasional | Perguruan Tinggi
            </div>

          </div>

        </div>

        <!-- Card -->
        <div class="px-4 py-3 mt-6 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

          <div class="px-6 py-4 text-gray-700 dark:text-gray-200">

            <table class="w-full text-sm text-left">
              <tbody>

                <tr>
                  <th scope="row">Nama Program Studi</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Jenis Program</th>
                  <td>Sarjana</td>
                </tr>

                <tr>
                  <th scope="row">Peringkat Akreditasi PS</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Tanggal Kadaluarsa</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Nama Unit Pengelola</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Nama Perguruan Tinggi</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Alamat</th>
                  <td>-</td>
                  <td>
                    <div class="w-full flex justify-evenly">
                      <div class="justify-start -px-4">Kota/Kabupaten</div>
                      <div class="px-4">-</div>
                      <div class="px-4">Kode Pos</div>
                      <div class="px-4">-</div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <th scope="row">Tanggal Kadaluarsa</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Nomor Telepon</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Email</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Website</th>
                  <td>-</td>
                </tr>

                <tr>
                  <th scope="row">Tanggal Kadaluarsa</th>
                  <td>-</td>
                </tr>

                <tr title="Tahun akademik penuh terakhir saat pengajuan usulan akreditasi">
                  <th scope="row">TS</th>
                  <td>-</td>
                </tr>

                <tr>
                  <td>Nama Pengusul</td>
                  <td>Budi</td>
                </tr>

                <tr>
                  <td>Tanggal</td>
                  <td>06 Februari 2024</td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>
        <!-- Card -->

      </div>

    </main>
    </div>
    </div>
    <?= $this->endSection(); ?>