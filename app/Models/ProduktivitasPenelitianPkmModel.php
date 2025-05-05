<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduktivitasPenelitianPkmModel extends Model
{
    protected $table = 'produktivitas_penelitianpkm';
    protected $primaryKey = 'id';
    protected $allowedFields = ['sumber_biaya','ts1','ts2','ts3','jumlah'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM produktivitas_penelitianpkm");

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