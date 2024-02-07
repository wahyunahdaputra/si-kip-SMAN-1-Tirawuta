<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\ProgramStudiModel;

class ProgramStudi extends BaseController
{
    protected $mprogram_studi;

    public function __construct(){

        $this->mprogram_studi = new ProgramStudiModel();
    }

    public function index()
    {
       $getdata = $this->mprogram_studi->getdata();

    //    $filter_params = array(
    //     'fakultas' => $this -> input -> get('fakultas'),
    //     'program'  => $this -> input -> get('fakultas'),
    //    );
    //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();

       $data = array(
            'dataProgramStudi' => $getdata,
       );

    //    var_dump($getdata);
        return view('data/home', $data);
    }
}
