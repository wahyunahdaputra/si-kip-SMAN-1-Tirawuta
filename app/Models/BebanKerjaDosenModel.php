<?php

namespace App\Models;

use CodeIgniter\Model;

class BebanKerjaDosenModel extends Model
{
    protected $table = 'bebankerja_dosen';
    protected $allowedFields = ['unit_pengelola','jumlah_dosen','jumlah_mahasiswa','jumlah_mahasiswata'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM bebankerja_dosen");

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