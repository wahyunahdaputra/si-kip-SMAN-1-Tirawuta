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

       $data = array(
            'dataProgramStudi' => $getdata,
       );

    //    var_dump($getdata);
        return view('data/home', $data);
    }
}
