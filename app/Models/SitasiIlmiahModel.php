<?php

namespace App\Models;

use CodeIgniter\Model;

class SitasiIlmiahModel extends Model
{
    protected $table = 'sitasi_ilmiah';
    protected $allowedFields = ['lembaga_akrint','program_studi','status','masa_berlaku','keterangan'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM sitasi_ilmiah");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}