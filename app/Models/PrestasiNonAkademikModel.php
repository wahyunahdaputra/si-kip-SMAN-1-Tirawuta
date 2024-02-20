<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestasiNonAkademikModel extends Model
{
    protected $table = 'prestasi_nonakademik';
    protected $allowedFields = ['nama','jenis_kelamin','nim','fakultas','nama_kegiatan','waktu_kegiatan','tempat','tingkatan','hasil','dokumen_fisik'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM prestasi_nonakademik");

        return $query->getResult();
    }
    public function getFilteredData() {
        $query = $this->db->query("");
    }
}