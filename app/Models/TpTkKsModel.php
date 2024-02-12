<?php

namespace App\Models;

use CodeIgniter\Model;

class TpTkKsModel extends Model
{
    protected $table = 'audit_keuangan_eks';
    protected $allowedFields = ['lembaga_audit','tahun','opini','keterangan'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM audit_keuangan_eks");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}