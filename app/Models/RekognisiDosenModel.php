<?php

namespace App\Models;

use CodeIgniter\Model;

class RekognisiDosenModel extends Model
{
    protected $table = 'rekognisi_dosen';
    protected $allowedFields = ['nama_dosen','bidang_keahlian','rekognisi','tahun'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM rekognisi_dosen");

        return $query->getResult();
    }
}