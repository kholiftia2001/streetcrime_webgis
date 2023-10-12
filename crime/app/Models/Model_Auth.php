<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Auth extends Model
{
    //login
    public function login($nama_admin, $password)
    {
        return $this->db->table('tbl_admin')->where([
            'nama_admin' => $nama_admin,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
