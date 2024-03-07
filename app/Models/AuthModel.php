<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'auth_login';
    protected $allowedFields = ['username','password'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM auth_login");

        return $query->getResult();
    }
}