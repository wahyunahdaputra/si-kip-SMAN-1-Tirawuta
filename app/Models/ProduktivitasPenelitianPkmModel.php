<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduktivitasPenelitianPkmModel extends Model
{
    protected $table = 'produktivitas_penelitianpkm';
    protected $allowedFields = ['sumber_biaya','ts1','ts2','ts3','jumlah'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM produktivitas_penelitianpkm");

        return $query->getResult();
    }
}