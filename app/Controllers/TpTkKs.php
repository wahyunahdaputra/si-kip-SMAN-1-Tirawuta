<?php

namespace App\Controllers;

use App\Models\TpTkKsModel;

class TpTkKs extends BaseController
{

    protected $mtptkks;

    public function __construct(){

        $this->mtptkks = new TpTkKsModel();
    }

    public function index()
    {
        $getdata = $this->mtptkks->getdata();

        //    $filter_params = array(
        //     'fakultas' => $this -> input -> get('fakultas'),
        //     'program'  => $this -> input -> get('fakultas'),
        //    );
        //    $get_filtered_data = $this -> mprogram_studi -> getFilteredData();
    
           $data = array(
                'dataAuditKeuanganEks' => $getdata,
           );
    
           var_dump($getdata);
            // echo view('layout/template', $data);
            // return view('pamongkelolakerjasama/auditkeuanganeks');
        }
}
