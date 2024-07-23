<?php

namespace App\Controllers;

use App\Models\AkrInternasionalModel;
use App\Models\AuditKeuanganEksModel;
use App\Models\AkrProdiModel;
use App\Models\HomeModel;
use App\Models\MhsAsingModel;
use App\Models\SitasiIlmiahModel;
use App\Models\PrestasiAkademikModel;
use App\Models\PrestasiNonAkademikModel;
use App\Models\ProgramStudiModel;
use App\Models\AkrEksternalModel;
use App\Models\PembelajaranPraktikumModel;
use App\Models\ProdukJasaModel;
use App\Models\KerjaSamaPerguruanTinggiModel;
use App\Models\KecukupanDosenModel;
use App\Models\BebanKerjaDosenModel;
use App\Models\ProduktivitasPenelitianModel;
use App\Models\ProduktivitasPenelitianPkmModel;
use App\Models\RekognisiDosenModel;
use App\Models\RiwayatAkreditasiProdiModel;
use App\Models\SeleksiMahasiswaBaruModel;

class Data extends BaseController
{

    protected $mhome;
    protected $mauditkeuanganeks;
    protected $makrinternasional;
    protected $makrprodi;
    protected $mmhsasing;
    protected $msitasiilmiah;
    protected $mpresakademik;
    protected $mpresnonakademik;
    protected $mriwayatakreditasiprodi;
    protected $mriwayatprodi;
    protected $mpembpraktikum;
    protected $makreksternal;
    protected $mprodukjasa;
    protected $mkerjasamaperguruantinggi;
    protected $mkecukupandosen;
    protected $mbebankerjadosen;
    protected $mproduktivitaspenelitian;
    protected $mproduktivitaspenelitianpkm;
    protected $mrekognisidosen;
    protected $mpagination;
    protected $mseleksimahasiswabaru;

    public function __construct(){

        $this->mhome = new HomeModel();
        $this->makrinternasional = new AkrInternasionalModel();
        $this->makrprodi = new AkrProdiModel();
        $this->mmhsasing = new MhsAsingModel();
        $this->msitasiilmiah = new SitasiIlmiahModel();
        $this->mpresakademik = new PrestasiAkademikModel();
        $this->mpresnonakademik = new PrestasiNonAkademikModel();
        $this->mriwayatakreditasiprodi = new ProgramStudiModel();
        $this->mauditkeuanganeks = new AuditKeuanganEksModel();
        $this->makreksternal = new AkrEksternalModel();
        $this->mpembpraktikum = new PembelajaranPraktikumModel();
        $this->mprodukjasa = new ProdukJasaModel();
        $this->mkerjasamaperguruantinggi = new KerjaSamaPerguruanTinggiModel();
        $this->mkecukupandosen = new KecukupanDosenModel();
        $this->mbebankerjadosen = new BebanKerjaDosenModel();
        $this->mproduktivitaspenelitian = new ProduktivitasPenelitianModel();
        $this->mproduktivitaspenelitianpkm = new ProduktivitasPenelitianPkmModel();
        $this->mrekognisidosen = new RekognisiDosenModel();
        $this->mriwayatprodi = new RiwayatAkreditasiProdiModel();
        $this->mseleksimahasiswabaru = new SeleksiMahasiswaBaruModel();
    }
    public function home() 
    {
       $getdata = $this->mhome->getdata();

       $data = array(
            'dataProgramStudi' => $getdata,
            'paginasi' => $this->mhome->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
            'pager' => $this->mhome->pager
       );

        echo view('data/home', $data);
    }

    public function formAps1() 
    {
        echo view('data/formAps1');
    }

    public function auditkeuanganeks()
    {
        if ($this->request->is('post')) {
            
            $formData = [
                'lembaga_audit' => $this->request->getPost('lembaga_audit'),
                'tahun' => $this->request->getPost('tahun'),
                'opini' => $this->request->getPost('opini'),
                'keterangan' => $this->request->getPost('keterangan')
            ];
    
            $this->mauditkeuanganeks->simpan($formData);
    
            return redirect()->to(base_url('data/auditkeuanganeks'))->with('status', 'Data berhasil ditambahkan!.');
        }

        $getdata = $this->mauditkeuanganeks->getdata();
           $data = array(
                'auditkeuanganeks' => $getdata,
                'validation' => \Config\Services::validation()
           );

        echo view('data/auditkeuanganeks', $data);
        
    }
    public function auditkeuanganeks_update($id)
            {
                if ($this->request->is('post')) {
                    $formData = [
                        'lembaga_audit' => $this->request->getPost('lembaga_audit'),
                        'tahun' => $this->request->getPost('tahun'),
                        'opini' => $this->request->getPost('opini'),
                        'keterangan' => $this->request->getPost('keterangan')
                    ];
                }
                $this->mauditkeuanganeks->updateData($id, $formData);

                return redirect()->to('data/auditkeuanganeks')->with('status', 'Data berhasil diupdate');
            }

        public function auditkeuanganeks_delete($id) {
            $this -> mauditkeuanganeks -> hapus($id);
            return redirect() -> to('data/auditkeuanganeks');
        }

    public function akrinternasional()
    {
        if ($this->request->is('post')) {
            // Mengambil data dari form
            $formData = [
                'lembaga_akrint' => $this->request->getPost('lembaga_akrint'),
                'program_studi' => $this->request->getPost('program_studi'),
                'status' => $this->request->getPost('status'),
                'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                'keterangan' => $this->request->getPost('keterangan')
            ];

        $this->makrinternasional->simpan($formData);

        // Redirect atau beri respons sesuai kebutuhan Anda
        return redirect()->to(base_url('data/akrinternasional'))->with('status', 'Data berhasil disimpan.');
    }

        $getdata = $this->makrinternasional->getdata();
    
           $data = array(
                'akrinternasional' => $getdata,
           );
    
        //    var_dump($getdata);
            echo view('data/akrinternasional', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }

        public function akrinternasional_update($id)
            {
                if ($this->request->is('post')) {
                    $formData = [
                        'lembaga_akrint' => $this->request->getPost('lembaga_akrint'),
                        'program_studi' => $this->request->getPost('program_studi'),
                        'status' => $this->request->getPost('status'),
                        'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                        'keterangan' => $this->request->getPost('keterangan')
                    ];
                }
                $this->makrinternasional->updateData($id, $formData);

                return redirect()->to('data/akrinternasional')->with('status', 'Data berhasil diupdate');
            }

        public function akrinternasional_delete($id) {
            $this -> makrinternasional -> hapus($id);
            return redirect() -> to('data/akrinternasional');
        }
        

        public function mhsasing()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'batch' => $this->request->getPost('batch'),
                    'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'gender' => $this->request->getPost('gender'),
                    'asal_universitas' => $this->request->getPost('asal_universitas'),
                    'negara' => $this->request->getPost('negara')
                ];
        
                $this->mmhsasing->simpan($formData);
        
                return redirect()->to(base_url('data/mhsasing'))->with('status', 'Data berhasil disimpan.');
            }

        $getdata = $this->mmhsasing->getdata();

           $data = array(
                'mhsasing' => $getdata,
           );
            echo view('data/mhsasing', $data);
        }

        public function sitasiilmiah()
        {
        $getdata = $this->msitasiilmiah->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
           $data = array(
                'sitasiilmiah' => $getdata,
                'paginasi' => $this->msitasiilmiah->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->msitasiilmiah->pager

           );
    
        //    var_dump($getdata);
            echo view('data/sitasiilmiah', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
        public function prestasimahasiswa()
        {
        $getdata = $this->mpresakademik->getdata();
        $getdata = $this->mpresnonakademik->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
           $data = array(
                'presakademik' => $getdata,
                'presnonakademik' => $getdata,
                'paginasi' => $this->mpresakademik->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->mpresakademik->pager,
                'paginasii' => $this->mpresnonakademik->paginate(10, 'paginasii'), // Mengambil data yang dipaginasi
                'pagers' => $this->mpresnonakademik->pagers
           );
    
        //    var_dump($getdata);
            echo view('data/prestasimahasiswa', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
        public function riwayatakreditasiprodi()
        {
        $getdata = $this->mriwayatakreditasiprodi->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
           $data = array(
                'programstudi' => $getdata,
                'paginasi' => $this->mriwayatakreditasiprodi->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->mriwayatakreditasiprodi->pager

           );
    
        //    var_dump($getdata);
            echo view('data/riwayatakreditasiprodi', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }

        public function riwayatAkreditasi($nama) 
        {
            $data = array(
                'identifier' => $nama,
                'data' => $this -> mriwayatprodi -> getDataProdi($nama)
            );
            echo view('data/riwayatakreditasi', $data);
        }
        
        public function akrprodi()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'program' => $this->request->getPost('program'),
                    'program_studi' => $this->request->getPost('program_studi'),
                    'pr_akreditasi' => $this->request->getPost('pr_akreditasi'),
                    'no_sk' => $this->request->getPost('no_sk'),
                    'tgl_kadaluarsa' => $this->request->getPost('tgl_kadaluarsa')
                ];

                $this->makrprodi->simpan($formData);

                return redirect()->to(base_url('data/akrprodi'))->with('status', 'Data berhasil disimpan.');
            }

    
            $getdata = $this->makrprodi->getdata();

            $data = array(
                'akrprodi' => $getdata,
                'paginasi' => $this->makrprodi->paginate(10, 'paginasi'), 
                'pager' => $this->makrprodi->pager
            );

            echo view('data/akrprodi', $data);
        }

        public function akrprodi_update($id)
            {
                if ($this->request->is('post')) {
                    $formData = [
                        'program' => $this->request->getPost('program'),
                        'program_studi' => $this->request->getPost('program_studi'),
                        'pr_akreditasi' => $this->request->getPost('pr_akreditasi'),
                        'no_sk' => $this->request->getPost('no_sk'),
                        'tgl_kadaluarsa' => $this->request->getPost('tgl_kadaluarsa'),
                    ];
                }
                $this->makrprodi->updateData($id, $formData);

                return redirect()->to('data/akrprodi')->with('status', 'Data berhasil diupdate');
            }

        public function akrprodi_delete($id) {
            $this -> makrprodi -> hapus($id);
            return redirect() -> to('data/akrprodi');
        }

        public function akreksternal()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'lembaga' => $this->request->getPost('lembaga'),
                    'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
                    'lingkup' => $this->request->getPost('lingkup'),
                    'tingkat' => $this->request->getPost('tingkat'),
                    'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                    'keterangan' => $this->request->getPost('keterangan')
                ];
        
                $this->makreksternal->simpan($formData);
        
                return redirect()->to(base_url('data/akreksternal'))->with('status', 'Data berhasil disimpan.');
            }

           $getdata = $this->makreksternal->getdata();

           $data = array(
                'akreksternal' => $getdata,
                'paginasi' => $this->makreksternal->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->makreksternal->pager

           );
    
            echo view('data/akreksternal', $data);

        }

        public function akreksternal_update($id)
            {
                if ($this->request->is('post')) {
                    $formData = [
                        'lembaga' => $this->request->getPost('lembaga'),
                        'jenis_sertifikat' => $this->request->getPost('jenis_sertifikat'),
                        'lingkup' => $this->request->getPost('lingkup'),
                        'tingkat' => $this->request->getPost('tingkat'),
                        'masa_berlaku' => $this->request->getPost('masa_berlaku'),
                        'keterangan' => $this->request->getPost('keterangan')
                    ];
                }
                $this->makreksternal->updateData($id, $formData);

                return redirect()->to('data/akreksternal')->with('status', 'Data berhasil diupdate');
            }

        public function akreksternal_delete($id) {
            $this -> makreksternal -> hapus($id);
            return redirect() -> to('data/akreksternal');
        }
        
        public function pembelajaranpraktikum()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'prodi' => $this->request->getPost('prodi'),
                    'teori' => $this->request->getPost('teori'),
                    'praktikum' => $this->request->getPost('praktikum'),
                    'praktik' => $this->request->getPost('praktik'),
                    'praktik_lapangan' => $this->request->getPost('praktik_lapangan'),
                ];
        
                $this->mpembpraktikum->simpan($formData);
        
                return redirect()->to(base_url('data/pembelajaranpraktikum'))->with('status', 'Data berhasil disimpan.');
            }  
        $getdata = $this->mpembpraktikum->getdata();

           $data = array(
                'pembelajaranpraktikum' => $getdata,
                'paginasi' => $this->mpembpraktikum->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->mpembpraktikum->pager

           );
    
        //    var_dump($getdata);
            echo view('data/pembelajaranpraktikum', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
        public function seleksimahasiswabaru()
        {
    
           $data = array(
                'ChartData' => $this->mseleksimahasiswabaru->getAllDataChart()
           );
    
        //    var_dump($getdata);
            echo view('data/seleksimahasiswabaru', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
        public function produkjasa()
        {
            $getdata = $this->mprodukjasa->getdata();

            //    $filter_params = array(
            //     'fakultas' => $this -> input -> get('fakultas'),
            //     'program'  => $this -> input -> get('fakultas'),
            //    );
            //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
        
               $data = array(
                    'produkjasa' => $getdata,
                    'paginasi' => $this->mprodukjasa->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                    'pager' => $this->mprodukjasa->pager
    
               );
        
            //    var_dump($getdata);
                echo view('data/produkjasa', $data);
        }

        public function kerjasamaperguruantinggi() 
        {
            if ($this->request->is('post')) {
                $formData = [
                    'lembaga_mitra' => $this->request->getPost('lembaga_mitra'),
                    'internasional' => $this->request->getPost('internasional'),
                    'nasional' => $this->request->getPost('nasional'),
                    'lokal' => $this->request->getPost('lokal'),
                    'bentuk_kegiatan' => $this->request->getPost('bentuk_kegiatan'),
                    'bukti_kerjasama' => $this->request->getPost('bukti_kerjasama'),
                    'nama_kajur' => $this->request->getPost('nama_kajur')
                ];
    
            $this->mkerjasamaperguruantinggi->simpan($formData);
    
            return redirect()->to(base_url('data/kerjasamaperguruantinggi'))->with('status', 'Data berhasil disimpan.');
        }

            $getdata = $this->mkerjasamaperguruantinggi->getdata();

            $totalNasional = $this->mkerjasamaperguruantinggi->where('nasional', 'nasional')->countAllResults();
            $totalInternasional = $this->mkerjasamaperguruantinggi->where('internasional', 'internasional')->countAllResults();
            $totalLokal = $this->mkerjasamaperguruantinggi->where('lokal', 'lokal')->countAllResults();
        
               $data = array(
                    'kerjasamaperguruantinggi' => $getdata,
                    'paginasi' => $this->mkerjasamaperguruantinggi->paginate(10, 'paginasi'),
                    'pager' => $this->mkerjasamaperguruantinggi->pager,
                    'totalNasional' => $totalNasional,
                    'totalInternasional' => $totalInternasional,
                    'totalLokal' => $totalLokal
    
               );
        
            echo view('data/kerjasamaperguruantinggi', $data);
        }

        public function kerjasamaperguruantinggi_update($id)
            {
                if ($this->request->is('post')) {
                    $formData = [
                        'lembaga_mitra' => $this->request->getPost('lembaga_mitra'),
                        'internasional' => $this->request->getPost('internasional'),
                        'nasional' => $this->request->getPost('nasional'),
                        'lokal' => $this->request->getPost('lokal'),
                        'bentuk_kegiatan' => $this->request->getPost('bentuk_kegiatan'),
                        'bukti_kerjasama' => $this->request->getPost('bukti_kerjasama'),
                        'nama_kajur' => $this->request->getPost('nama_kajur')
                    ];
                }
                $this->mkerjasamaperguruantinggi->updateData($id, $formData);

                return redirect()->to('data/kerjasamaperguruantinggi')->with('status', 'Data berhasil diupdate');
            }

            public function kerjasamaperguruantinggi_delete($id) {
                $this -> mkerjasamaperguruantinggi -> hapus($id);
                return redirect() -> to('data/kerjasamaperguruantinggi');
            }

        public function kecukupanDosen()
        {
            $getdata = $this->mkecukupandosen->getdata();

            //    $filter_params = array(
            //     'fakultas' => $this -> input -> get('fakultas'),
            //     'program'  => $this -> input -> get('fakultas'),
            //    );
            //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
        
               $data = array(
                    'kecukupandosen' => $getdata
               );

            echo view('data/kecukupandosen', $data);
        }

        public function bebankerjadosen()
        {
            if ($this->request->is('post')) {
                $formData = [
                    'unit_pengelola' => $this->request->getPost('unit_pengelola'),
                    'jumlah_dosen' => $this->request->getPost('jumlah_dosen'),
                    'jumlah_mahasiswa' => $this->request->getPost('jumlah_mahasiswa'),
                    'jumlah_mahasiswata' => $this->request->getPost('jumlah_mahasiswata'),
                ];

                $this->mbebankerjadosen->simpan($formData);

                return redirect()->to(base_url('data/bebankerjadosen'))->with('status', 'Data berhasil disimpan.');
            }

    
            $getdata = $this->mbebankerjadosen->getdata();

            $data = array(
                'bebankerjadosen' => $getdata,
                'paginasi' => $this->mbebankerjadosen->paginate(10, 'paginasi'), 
                'pager' => $this->mbebankerjadosen->pager
            );

            echo view('data/bebankerjadosen', $data);
        }

        public function bebankerjadosen_update($id)
            {
                if ($this->request->is('post')) {
                    $formData = [
                        'unit_pengelola' => $this->request->getPost('unit_pengelola'),
                        'jumlah_dosen' => $this->request->getPost('jumlah_dosen'),
                        'jumlah_mahasiswa' => $this->request->getPost('jumlah_mahasiswa'),
                        'jumlah_mahasiswata' => $this->request->getPost('jumlah_mahasiswata'),
                    ];
                }
                $this->mbebankerjadosen->updateData($id, $formData);

                return redirect()->to('data/bebankerjadosen')->with('status', 'Data berhasil diupdate');
            }

        public function bebankerjadosen_delete($id) {
            $this -> mbebankerjadosen -> hapus($id);
            return redirect() -> to('data/bebankerjadosen');
        }

        public function produktivitaspenelitian()
        {
            $getdata = $this->mproduktivitaspenelitian->getdata();
            $getdata = $this->mproduktivitaspenelitianpkm->getdata();

            //    $filter_params = array(
            //     'fakultas' => $this -> input -> get('fakultas'),
            //     'program'  => $this -> input -> get('fakultas'),
            //    );
            //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
        
               $data = array(
                    'produktivitaspenelitian' => $getdata,
                    'produktivitaspenelitianpkm' => $getdata
               );

            echo view('data/produktivitaspenelitian', $data);
        }
        public function rekognisidosen()
        {
            $getdata = $this->mrekognisidosen->getdata();

            //    $filter_params = array(
            //     'fakultas' => $this -> input -> get('fakultas'),
            //     'program'  => $this -> input -> get('fakultas'),
            //    );
            //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
        
               $data = array(
                    'rekognisidosen' => $getdata
               );

            echo view('data/rekognisidosen', $data);
        }
        public function perolehanDana()
        {
            echo view('data/perolehandana');
        }
        public function penggunaanDana()
        {
            echo view('data/penggunaandana');
        }

}
