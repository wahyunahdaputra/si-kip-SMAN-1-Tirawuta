<?php

namespace App\Controllers;

use App\Models\HomeModel;


class Home extends BaseController
{
    protected $mhome;
    protected $mpagination;

    public function __construct(){

        $this->mhome = new HomeModel();
    }

    public function index()
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
        echo view('data/home', $data);
    }
}
