<?php

namespace App\Models;

use CodeIgniter\Model;

class KerjasamaPerguruanTinggiModel extends Model
{
    protected $table = 'kerjasama_pt';
    protected $primaryKey = 'id';
    protected $allowedFields = ['lembaga_mitra','internasional','nasional','lokal','bentuk_kegiatan','bukti_kerjasama'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM kerjasama_pt");

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