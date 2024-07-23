<?php

namespace App\Models;

use CodeIgniter\Model;

class AuditKeuanganEksModel extends Model
{
    protected $table = 'audit_keuangan_eks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['lembaga_audit','tahun','opini','keterangan'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM audit_keuangan_eks");

        return $query->getResult();
    }

    public function simpan($data)
    {
        $this->insert($data);
    }
    
    public function updateData($id, $data)
    {
        $this->where('id', $id);
        $this->set($data);
        $this->update();
    }

    public function hapus($id)
    {
        $this->where('id', $id)->delete();
    }
}