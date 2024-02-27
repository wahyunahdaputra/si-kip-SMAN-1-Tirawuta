<?php

namespace App\Models;

use CodeIgniter\Model;
use InvalidArgumentException;

class SeleksiMahasiswaBaruModel extends Model
{
    protected $table = 'tabel_seleksi_maba';
    protected $allowedFields = ['tahun_akademik', 'nama_prodi', 'jalur_masuk', 'peminat', 'daya_tampung', 'lulus_seleksi', 'registrasi_ulang'];

    public function getAllDataChart()
    {

        $query = $this->db->query("SELECT
        tabel_periode.tahun_akademik, tabel_seleksi_maba.id_jalur_masuk, peminat, daya_tampung, lulus_seleksi, registrasi_ulang
        
        FROM tabel_seleksi_maba, tabel_jalur_masuk, tabel_periode
        
        WHERE
        tabel_seleksi_maba.id_jalur_masuk = tabel_jalur_masuk.id_jalur_masuk
        AND tabel_seleksi_maba.id_periode = tabel_periode.id_periode");

        return $query->getResult();
    }
}
