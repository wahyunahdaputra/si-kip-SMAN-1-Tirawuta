<?php 

namespace App\Models;

use CodeIgniter\Model;

class RiwayatAkreditasiProdiModel extends Model
{
    protected $table = 'riwayat_akreditasi';
    protected $allowedFields = ['nama_prodi', 'riwayat_tahun', 'riwayat_akrd', 'link_sertifikat'];

    public function getDataProdi($nama_prodi) 
    {
        $query = $this -> db -> query("SELECT `riwayat_akreditasi`.`nama_prodi`, `riwayat_akreditasi`.`riwayat_tahun`, `riwayat_akreditasi`.`riwayat_akrd`, `riwayat_akreditasi`.`link_sertifikat` FROM `riwayat_akreditasi` WHERE `riwayat_akreditasi`.`nama_prodi` ='" . $nama_prodi . "';");

        return $query -> getResult();
    }
}

