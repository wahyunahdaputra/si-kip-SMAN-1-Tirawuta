<?php

namespace App\Models;

use CodeIgniter\Model;

class AkrProdiModel extends Model
{
    protected $table = 'program_studi';
    protected $primaryKey = 'id_ps';
    protected $allowedFields = ['program', 'program_studi', 'pr_akreditasi', 'no_sk', 'tgl_kadaluarsa'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM program_studi");

        return $query->getResult();
    }

    public function simpan($data) 
    {
        $this->insert($data);
    }

    public function updateData($id, $data)
    {
        $this->where('id_ps', $id);
        $this->set($data);
        $this->update();
    }

    public function hapus($id)
    {
        $this->where('id_ps', $id)->delete();
    }
}
