<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelajaranPraktikumModel extends Model
{
    protected $table = 'pembelajaran_praktikum';
    protected $allowedFields = ['prodi','teori','praktikum','praktik','praktik_lapangan'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM pembelajaran_praktikum");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}