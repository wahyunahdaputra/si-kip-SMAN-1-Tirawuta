<?php

namespace App\Controllers;

use App\Models\AkrInternasionalModel;
use App\Models\AuditKeuanganEksModel;
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
        $getdata = $this->mauditkeuanganeks->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();

           $data = array(
                'auditkeuanganeks' => $getdata,
           );

        //    var_dump($getdata);
        echo view('data/auditkeuanganeks', $data);
    }

    public function akrinternasional()
    {
        $getdata = $this->makrinternasional->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
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
            echo view('data/akrprodi', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
        public function akreksternal()
        {
        $getdata = $this->makreksternal->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
           $data = array(
                'akreksternal' => $getdata,
                'paginasi' => $this->makreksternal->paginate(10, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->makreksternal->pager

           );
    
        //    var_dump($getdata);
            echo view('data/akreksternal', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
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

}
