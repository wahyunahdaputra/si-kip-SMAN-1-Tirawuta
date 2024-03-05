<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukJasaModel extends Model
{
    protected $table = 'produk_jasa';
    protected $allowedFields = ['nama_pj','desk_pj','tingkat_kestek'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM produk_jasa");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}