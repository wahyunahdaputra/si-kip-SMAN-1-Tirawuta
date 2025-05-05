<?php

namespace App\Models;

use CodeIgniter\Model;

class KecukupanDosenModel extends Model
{
    protected $table = 'kecukupan_dosen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['unit_pengelola','doktor','magister','profesi','jumlah'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM kecukupan_dosen");

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