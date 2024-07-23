<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduktivitasPenelitianModel extends Model
{
    protected $table = 'produktivitas_penelitian';
    protected $allowedFields = ['sumber_biaya','ts1','ts2','ts3','jumlah'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM produktivitas_penelitian");

        return $query->getResult();
    }
}