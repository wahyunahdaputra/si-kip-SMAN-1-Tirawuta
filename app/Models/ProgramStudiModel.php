<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramStudiModel extends Model
{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM program_studi");

        return $query->getResult();
    }
}
