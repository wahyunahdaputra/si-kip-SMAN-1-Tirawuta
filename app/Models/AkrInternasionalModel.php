<?php

namespace App\Models;

use CodeIgniter\Model;

class AkrInternasionalModel extends Model
{
    protected $table = 'akreditasi_internasional';
    protected $allowedFields = ['lembaga_akrint','program_studi','status','masa_berlaku','keterangan'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM akreditasi_internasional");

        return $query->getResult();
    }

    public function simpan($data) 
    {
        $this->insert($data);
    }
}