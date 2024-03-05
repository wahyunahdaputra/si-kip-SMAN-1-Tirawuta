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

       $data = array(
            'dataProgramStudi' => $getdata,
            'paginasi' => $this->mhome->paginate(30, 'paginasi'), // Mengambil data yang dipaginasi
            'pager' => $this->mhome->pager
       );

            echo view('data/home', $data);
    }
    
    
}
