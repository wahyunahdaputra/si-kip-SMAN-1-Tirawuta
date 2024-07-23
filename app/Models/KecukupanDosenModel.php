<?php

namespace App\Models;

use CodeIgniter\Model;

class KecukupanDosenModel extends Model
{
    protected $table = 'kecukupan_dosen';
    protected $allowedFields = ['unit_pengelola','doktor','magister','profesi','jumlah'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM kecukupan_dosen");

        return $query->getResult();
    }
}