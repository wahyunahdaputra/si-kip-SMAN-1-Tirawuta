        <?= $this->extend('layout/template'); ?>
        <?= $this->section('content'); ?>
        <main class="h-full overflow-y-auto">

            <?php
            // Atur waktu bawaan untuk zona waktu (WITA)
            date_default_timezone_set("Asia/Makassar")
            ?>

            <div class="container px-6 mx-auto grid">
                <!-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Dashboard
                        </h2> -->
                <!-- Charts -->
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Data Program Studi
                </h2>
                <div class="grid gap-6 mb-8 md:grid-cols-2">
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Program
                        </h4>
                        <canvas id="pie"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                                <span>Doktor</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                <span>Magister</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>Profesi</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-pink-600 rounded-full"></span>
                                <span>Sarjana</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-yellow-400 rounded-full"></span>
                                <span>Diploma 3</span>
                            </div>
                        </div>
                    </div>
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Program Studi/Fakultas
                        </h4>
                        <canvas id="line"></canvas>
                        <div class="flex flex-wrap justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                <span>FPT</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>FKM</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                                <span>FH</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-pink-600 rounded-full"></span>
                                <span>FT</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-yellow-400 rounded-full"></span>
                                <span>FK</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>FEB</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                <span>FISIP</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>FPK</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                <span>FKIP</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>FIB</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                <span>FPIK</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>FHIL</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                                <span>FF</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>FMIPA</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>PASCA SARJANA</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div
                                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                                Data Pegawai
                                </h4>
                                <canvas id="bars"></canvas>
                                <div
                                class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                                >
                                <div class="flex items-center">
                                    <span
                                    class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
                                    ></span>
                                    <span>PNS</span>
                                </div>
                                <div class="flex items-center">
                                    <span
                                    class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                                    ></span>
                                    <span>Honorer</span>
                                </div>
                                </div>
                            </div> -->
                </div>

                <!-- With actions -->
                <h3 class="mb-4 text-lg font-semibold text-black-600 dark:text-gray-300 text-center justify-center">
                    Daftar Status Akreditasi Program Studi
                </h3>
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">

                        <table class="w-full whitespace-no-wrap table-sortable" id="listApsStatus">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 always-visible">
                                    <td></td>

                                    <td class="px-2 py-3">
                                        <input class="flex w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Fakultas" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Program" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Program Studi" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Peringkat Akreditasi" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Tanggal SK" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Tanggal Kadaluarsa" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.No. SK" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Status Kadaluarsa" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                    <td class="px-2 py-3">
                                        <input class="block w-full mt-1 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input filter-input-listApsStatus" type="text" list="listApsStatus.Diakreditasi oleh" oninput="filterData('listApsStatus')" autocomplete="on">
                                    </td>
                                </tr>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">No.</th>
                                    <th class="px-4 py-3">Fakultas</th>
                                    <th class="px-4 py-3">Program</th>
                                    <th class="px-4 py-3">Program Studi</th>
                                    <th class="px-4 py-3">Peringkat Akreditasi</th>
                                    <th class="px-4 py-3">Tanggal SK</th>
                                    <th class="px-4 py-3">Tanggal Kadaluarsa</th>
                                    <th class="px-4 py-3">No. SK</th>
                                    <th class="px-4 py-3">Tanggal hari ini</th>
                                    <th class="px-4 py-3">Status Kadaluarsa</th>
                                    <th class="px-4 py-3">Diakreditasi oleh</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                <?php foreach ($paginasi as $pg) : ?>
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <?php
                                        // Ambil tanggal hari ini
                                        $tgl_sekarang = new DateTime();

                                        // Ambil data String dan konversi ke format date
                                        $tgl_sk_string = $pg['tgl_sk'];
                                        $tgl_sk_object = DateTime::createFromFormat('d/m/Y', $tgl_sk_string);

                                        $tgl_kadaluarsa_string = $pg['tgl_kadaluarsa'];
                                        $tgl_kadaluarsa_object = DateTime::createFromFormat('d/m/Y', $tgl_kadaluarsa_string);

                                        // jika object berhasil dikonversi dari string ke object
                                        if ($tgl_sk_object !== false) {
                                            // simpan tangggal yang terformat ke dalam variael
                                            $tgl_sk_formatted = $tgl_sk_object->format('d/m/Y');
                                            $tgl_kadaluarsa_formatted = $tgl_kadaluarsa_object->format('d/m/Y');
                                        } else {
                                            $tgl_sk_formatted = "";
                                            $tgl_kadaluarsa_formatted = "";;
                                        }

                                        $status_kadaluarsa = "";
                                        // Menghitung status kadaluarsa dalam hari (perbandingan dari tanggal sk dan hari ini)
                                        if ($tgl_sk_object !== false && $tgl_kadaluarsa_object !== false) {
                                            $status_kadaluarsa = date_diff($tgl_sekarang, $tgl_kadaluarsa_object, true);

                                            if ($status_kadaluarsa-> days >= 31) {
                                                $tahun = floor($status_kadaluarsa->days / 365); // Menghitung jumlah tahun
                                                $bulan = floor(($status_kadaluarsa->days % 365) / 30); // Menghitung jumlah bulan
                                                $sisa_hari = $status_kadaluarsa->days % 30; // Menghitung sisa hari

                                                $status_kadaluarsa = ''; // Inisialisasi variabel status_kadaluarsa

                                                if ($tgl_kadaluarsa_object < $tgl_sekarang) {
                                                    $status_kadaluarsa = "Lewat ";

                                                    if ($tahun != 0) {
                                                        $status_kadaluarsa .= "$tahun Tahun ";
                                                    }
    
                                                    if ($bulan != 0) {
                                                        $status_kadaluarsa .= "$bulan Bulan ";
                                                    }
    
                                                    if ($sisa_hari != 0) {
                                                        $status_kadaluarsa .= "$sisa_hari Hari ";
                                                    }
                                                } else {
                                                    $status_kadaluarsa = "Tersisa ";
                                                    if ($tahun != 0) {
                                                        $status_kadaluarsa .= "$tahun Tahun ";
                                                    }
    
                                                    if ($bulan != 0) {
                                                        $status_kadaluarsa .= "$bulan Bulan ";
                                                    }
    
                                                    if ($sisa_hari != 0) {
                                                        $status_kadaluarsa .= "$sisa_hari Hari ";
                                                    }
                                                }

                                                // Menghapus spasi ekstra di akhir string
                                                $status_kadaluarsa = rtrim($status_kadaluarsa);
                                            } else {
                                                $status_kadaluarsa = "";
                                            }
                                        }

                                        ?>
                                        <td class="px-4 py-3"><?= $pg['id_ps']; ?></td>
                                        <td class="px-4 py-3"><?= $pg['fakultas']; ?></td>
                                        <td class="px-4 py-3"><?= $pg['program'] ?></td>
                                        <td class="px-4 py-3"><?= $pg['program_studi']; ?></td>
                                        <td class="px-4 py-3"><?= $pg['pr_akreditasi']; ?></td>

                                        <td class="px-4 py-3"><?php echo $tgl_sk_formatted; ?></td>
                                        <td class="px-4 py-3"><?php echo $tgl_kadaluarsa_formatted;  ?></td>

                                        <td class="px-4 py-3"><?= $pg['no_sk']; ?></td>

                                        <td class="px-4 py-3"><?php echo date("d/m/Y") ?></td>
                                        <td class="px-4 py-3"><?php echo $status_kadaluarsa; ?></td>

                                        <td class="px-4 py-3"><?= $pg['akr_oleh']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <datalist id="listApsStatus.Fakultas"></datalist>
                        <datalist id="listApsStatus.Program"></datalist>
                        <datalist id="listApsStatus.Program Studi"></datalist>
                        <datalist id="listApsStatus.Peringkat Akreditasi"></datalist>
                        <datalist id="listApsStatus.Tanggal SK"></datalist>
                        <datalist id="listApsStatus.Tanggal Kadaluarsa"></datalist>
                        <datalist id="listApsStatus.No. SK"></datalist>
                        <datalist id="listApsStatus.Status Kadaluarsa"></datalist>
                        <datalist id="listApsStatus.Diakreditasi oleh"></datalist>

                        
                    </div>
                    <div class="flex justify-center px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                        <!-- Pagination -->
                        <?= $pager->links('paginasi', 'ps_pagination'); ?>
                    </div>
                </div>
            </div>
        </main>
<<<<<<< HEAD

        <script src="<?= base_url('assets/js/home/home.js') ?>"></script>
=======
        
        <link rel="stylesheet" href="<?= base_url('assets/css/util/table/style.css') ?>">
        <script src="<?= base_url('assets/js/home/index.js') ?>"></script>
        <script src="<?= base_url('assets/js/util/table/filter-data.js') ?>"></script>
        <script src="<?= base_url('assets/js/util/table/datalist-autocomplete.js') ?>"></script>
>>>>>>> 5b617110752a594c3ffd46761c776b4fe0ac5dba
        <script src="<?= base_url('assets/js/util/table/table-sort.js') ?>"></script>

        <?= $this->endSection(); ?>