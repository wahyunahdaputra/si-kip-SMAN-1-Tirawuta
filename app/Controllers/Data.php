<?php

namespace App\Controllers;

use App\Models\AkrInternasionalModel;
use App\Models\HomeModel;
use App\Models\MhsAsingModel;
use App\Models\SitasiIlmiahModel;
use App\Models\PrestasiAkademikModel;
use App\Models\PrestasiNonAkademikModel;
use App\Models\ProgramStudiModel;
use App\Models\RiwayatAkreditasiProdiModel;
use App\Models\TpTkKsModel;

class Data extends BaseController
{

    protected $mhome;
    protected $mtptkks;
    protected $makrinternasional;
    protected $mmhsasing;
    protected $msitasiilmiah;
    protected $mpresakademik;
    protected $mpresnonakademik;
    protected $mriwayatakreditasiprodi;
    protected $mriwayatprodi;
    protected $mpagination;

    public function __construct(){

        $this->mhome = new HomeModel();
        $this->makrinternasional = new AkrInternasionalModel();
        $this->mmhsasing = new MhsAsingModel();
        $this->msitasiilmiah = new SitasiIlmiahModel();
        $this->mpresakademik = new PrestasiAkademikModel();
        $this->mpresnonakademik = new PrestasiNonAkademikModel();
        $this->mriwayatakreditasiprodi = new ProgramStudiModel();
        $this->mtptkks = new TpTkKsModel();

        $this->mriwayatprodi = new RiwayatAkreditasiProdiModel();
    }

    public function index()
    {
        echo view('data/home');
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
            'paginasi' => $this->mhome->paginate(30, 'paginasi'), // Mengambil data yang dipaginasi
            'pager' => $this->mhome->pager
       );

    //    var_dump($getdata);
        // echo view('layout/template', $data);
        echo view('data/home', $data);
    }

    public function login()
    {
        echo view('data/login');
    }

    public function formAps1() 
    {
        echo view('data/formAps1');
    }

    public function auditkeuanganeks()
    {
        $getdata = $this->mtptkks->getdata();

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
                'paginasi' => $this->msitasiilmiah->paginate(30, 'paginasi'), // Mengambil data yang dipaginasi
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
                'paginasi' => $this->mpresakademik->paginate(30, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->mpresakademik->pager,
                'paginasii' => $this->mpresnonakademik->paginate(30, 'paginasii'), // Mengambil data yang dipaginasi
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
                'paginasi' => $this->mriwayatakreditasiprodi->paginate(30, 'paginasi'), // Mengambil data yang dipaginasi
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
                'paginasi' => $this->mhome->paginate(30, 'paginasi'), // Mengambil data yang dipaginasi
                'pager' => $this->mhome->pager

           );
    
        //    var_dump($getdata);
            echo view('data/akrprodi', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
        
}
