<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsAsingModel extends Model
{
    protected $table = 'mhs_asing';
    protected $allowedFields = ['batch','tahun_ajaran','nama_lengkap','gender','asal_universitas','negara'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM mhs_asing");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}