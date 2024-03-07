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
        $this->mriwayatprodi = new RiwayatAkreditasiProdiModel();
        $this->mseleksimahasiswabaru = new SeleksiMahasiswaBaruModel();
    }
    public function home() 
    {
        $getdata = $this->mhome->getdata();

    //    $filter_params = array(
    //     'fakultas' => $this -> input -> get('fakultas'),
    //     'program'  => $this -> input -> get('fakultas'),
    //    );
    //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();

       $data = array(
            'dataProgramStudi' => $getdata,
            'paginasi' => $this->mhome->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
            'pager' => $this->mhome->pager
       );

    //    var_dump($getdata);
        // echo view('layout/template', $data);
        echo view('data/home', $data);
    }

    public function formAps1() 
    {
        echo view('data/formAps1');
    }

    public function auditkeuanganeks()
    {
        if ($this->request->getMethod() === 'post') {

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
           );

        echo view('data/auditkeuanganeks', $data);
    }

    public function akrinternasional()
    {
        if ($this->request->getMethod() === 'post') {
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
        

        public function mhsasing()
        {
        $getdata = $this->mmhsasing->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
           $data = array(
                'mhsasing' => $getdata,
           );
    
        //    var_dump($getdata);
            echo view('data/mhsasing', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
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
            if ($this->request->getMethod() === 'post') {
                // Jika metode adalah POST (saat formulir disubmit), simpan data
                $formData = [
                    'program' => $this->request->getPost('program'),
                    'program_studi' => $this->request->getPost('program_studi'),
                    'pr_akreditasi' => $this->request->getPost('pr_akreditasi'),
                    'no_sk' => $this->request->getPost('no_sk'),
                    'tgl_kadaluarsa' => $this->request->getPost('tgl_kadaluarsa'),
                ];

                $this->makrprodi->simpan($formData);

                return redirect()->to(base_url('data/akrprodi'))->with('status', 'Data berhasil disimpan.');
            }

            // Jika bukan metode POST, hanya ambil data untuk menampilkan halaman
            $getdata = $this->makrprodi->getdata();

            $data = array(
                'akrprodi' => $getdata,
                'paginasi' => $this->makrprodi->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->makrprodi->pager
            );

            echo view('data/akrprodi', $data);
        }

        public function akreksternal()
        {
            if ($this->request->getMethod() === 'post') {
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
        public function pembelajaranpraktikum()
        {
        $getdata = $this->mpembpraktikum->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
           $data = array(
                'pembelajaranpraktikum' => $getdata,
                'paginasi' => $this->mpembpraktikum->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->mpembpraktikum->pager

           );
    
        //    var_dump($getdata);
            echo view('data/pembelajaranpraktikum', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
        public function seleksiMahasiswaBaru()
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
        public function kerjasamaPerguruanTinggi() 
        {
            echo view('data/kerjasamaperguruantinggi');
        }
        public function kecukupanDosen()
        {
            echo view('data/kecukupandosen');
        }
        public function bebanKerjaDosen()
        {
            echo view('data/bebankerjadosen');
        }
        public function produktivitasPenelitian()
        {
            echo view('data/produktivitasPenelitian');
        }
        public function rekognisiDosen()
        {
            echo view('data/rekognisiDosen');
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
