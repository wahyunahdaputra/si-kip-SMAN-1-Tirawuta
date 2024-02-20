<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramStudiModel extends Model
{
    protected $table = 'program_studi';
    protected $allowedFields = ['program_studi'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM program_studi");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}
