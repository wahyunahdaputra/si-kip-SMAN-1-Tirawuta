<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\TpTkKsModel;

class Data extends BaseController
{

    protected $mhome;
    protected $mtptkks;
    protected $mpagination;

    public function __construct(){

        $this->mhome = new HomeModel();
        $this->mtptkks = new TpTkKsModel();
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
}
