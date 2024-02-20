<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatAkreditasiModel extends Model
{
    protected $table = 'riwayat_akreditasi';
    protected $allowedFields = ['tahun_akreditasi','akreditasi','link_sertifikat'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM riwayat_akreditasi");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}