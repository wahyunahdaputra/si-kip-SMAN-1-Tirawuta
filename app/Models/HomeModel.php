<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'program_studi';
    protected $allowedFields = ['fakultas', 'program', 'program_studi', 'pr_akreditasi', 'tgl_sk', 'tgl_kadaluarsa', 'no_sk', 'tgl_hariini', 'status_kadaluarsa', 'akr_oleh'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM program_studi");

        return $query->getResult();
    }
}
